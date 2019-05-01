<?php

    function pullTableUsers($db){
        $sql = "SELECT * FROM users";
        $sql = $db->prepare($sql);
        $sql->execute();
        $results = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    function registerUserFunc($db, $email, $pword, $pword2){
        $sql = "SELECT * FROM usersSoftwareSecurity";
        $sql = $db->prepare($sql);
        $sql->execute();
        $results = $sql->fetchAll(PDO::FETCH_ASSOC);

        $boolVar = true;

        foreach($results as $result){
            if($email == $result['email'])
            {
                $boolVar = false;
            }
        }

        if($pword == $pword2){
            if($boolVar){
                try{
                    $pwordHash = hash('sha1', $pword);
                    $sql = "INSERT INTO usersSoftwareSecurity VALUES(null, :email, :password, 'username', NOW())";
                    $sql = $db->prepare($sql);
                    $sql->bindParam(':email',$email);
                    $sql->bindParam(':password', $pwordHash);
                    $sql->execute();

                    $sql = "SELECT userID FROM usersSoftwareSecurity WHERE email = :email";
                    $sql = $db->prepare($sql);
                    $sql->bindParam(':email', $email);
                    $sql->execute();
                    $results = $sql->fetchAll(PDO::FETCH_ASSOC);

                    foreach($results as $result){
                        $userID = $result['userID'];
                    }

                    echo "<br>user successfully created!";
                    ?>
                    <br><br>

                    <meta http-equiv="refresh" content="0; URL='login.php'"/>
                    <?php
                }
                catch(PDOException $err){
                    die("There was an error adding the user to the database.");
                }
            } else{
                $_SESSION['errorMSG'] = "That email is already in use.";
                include_once('register.php');
            }
        }
        else{
            $_SESSION['errorMSG'] = "Passwords do not match.";
            include_once('register.php');
        }

    }

    function loginUserFunc($db, $email, $pword){
        $sql = "SELECT * FROM usersSoftwareSecurity WHERE email = :email";
        $sql = $db->prepare($sql);
        $sql->bindParam(':email', $email);
        $sql->execute();
        $results = $sql->fetch(PDO::FETCH_ASSOC);

        $pwordHash = hash('sha1', $pword);

        if($email == $results['email'] && $pwordHash == $results['password']){
            ?>
            <p>Logged in!</p>
            <?php
            $_SESSION['loggedIn'] = true;
            $_SESSION['loggedInUsername'] = $email;
            $_SESSION['loggedInUserID'] = $results['userID'];
            ?>
            <br><br>
            <meta http-equiv="refresh" content="0; URL='index.php'"/>
            <br><br>
            <?php
        }

        else{
            $_SESSION['errorMSGlogin'] = "incorrect username / password!";

            include_once("login.php");
        }
    }

    function productsTableFunc(){
        ?>

        <table id="productsTable">

            <tr>

                <th class="tableRows">Product</th>
                <th class="tableRows">Price</th>
                <th class="tableRows">Picture</th>

            </tr>

            <tr>

                <th class="tableRows">Shirt</th>
                <th class="tableRows">$20</th>
                <th class="tableRows"><img id="productsTablePics" src="images/shirt.png" alt="shirt picture" /></th>

            </tr>

            <tr>

                <th class="tableRows">Pants</th>
                <th class="tableRows">$15</th>
                <th class="tableRows"><img id="productsTablePics" src="images/pants.png" alt="pants picture" /></th>

            </tr>

            <tr>

                <th class="tableRows">Shoe</th>
                <th class="tableRows">$40</th>
                <th class="tableRows"><img id="productsTablePics" src="images/shoes.png" alt="shoe picture" /></th>

            </tr>

            <tr>

                <th class="tableRows">Hat</th>
                <th class="tableRows">$10</th>
                <th class="tableRows"><img id="productsTablePics" src="images/hat.png" alt="hat picture" /></th>

            </tr>

        </table>

        <?php
    }

    function usernamePull($db){
        $sql = "SELECT username FROM userssoftwaresecurity WHERE userID = :userID";
        $sql = $db->prepare($sql);
        $sql->bindParam(':userID', $_SESSION["loggedInUserID"]);
        $sql->execute();
        $results = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    
    function submitUsernameFunc($db,$username){
        if(!$username)
        {
            $username = "username";
        }

        

        try{
            $sql = "UPDATE userssoftwaresecurity SET userName = :username WHERE userID = :userID";
            $sql = $db->prepare($sql);
            $sql->bindParam(':username', $username);
            $sql->bindParam(':userID', $_SESSION["loggedInUserID"]);
            $sql->execute();
        }
        catch(PDOException $e){
            die("There was an error updating your username.");
        }

        ?>

        <meta http-equiv="refresh" content="0; URL='index.php?action=userSettings'"/>

        <?php

    }

    function updateEmailFunc($db,$email,$pword){
        $sql = "SELECT * FROM userssoftwaresecurity WHERE userID = :userID";
        $sql = $db->prepare($sql);
        $sql->bindParam(':userID',$_SESSION["loggedInUserID"]);
        $sql->execute();
        $results = $sql->fetchAll(PDO::FETCH_ASSOC);

        $pwordHash = hash('sha1',$pword);

        foreach($results as $re)
        {
            if($re['userID'] == $_SESSION["loggedInUserID"])
            {
                $pwordDB = $re['password'];
                $usernameDB = $re['userName'];
                $userCreationDate = $re['userCreationDate'];
            }
        }
        
        if($pwordHash = $pwordDB){
            try{
                $sql = "UPDATE userssoftwaresecurity SET email = :email, password = :password, username = :username, userCreationDate = :UCR WHERE userID = :userID";
                $sql = $db->prepare($sql);
                $sql->bindParam(':email',$email);
                $sql->bindParam(':password',$pwordHash);
                $sql->bindParam(':username',$usernameDB);
                $sql->bindParam(':UCR',$userCreationDate);
                $sql->bindParam(':userID',$_SESSION["loggedInUserID"]);
                $sql->execute();
            }
            catch(PDOException $e){
                die("There was an error updating your email address.");
            }
            ?>
            
            <meta http-equiv="refresh" content="0; URL='index.php?action=userSettings'"/>
            
            <?php
        }
        else{
            echo "Password incorrect.";

            include_once("index.php?action=updateEmail");
        }

    }

    function updatePasswordFunc($db, $oldPass, $pword, $pwordConfirm){
        $sql = "SELECT * FROM userssoftwaresecurity WHERE userID = :userID";
        $sql = $db->prepare($sql);
        $sql->bindParam(':userID',$_SESSION["loggedInUserID"]);
        $sql->execute();
        $results = $sql->fetchAll(PDO::FETCH_ASSOC);

        $oldPassHash = hash('sha1',$oldPass);
        $pwordHash = hash('sha1',$pword);
        $pwordConfirmHash = hash('sha1',$pwordConfirm);

        foreach($results as $re)
        {
            if($re['userID'] == $_SESSION["loggedInUserID"])
            {
                $email = $re['email'];
                $pwordDB = $re['password'];
                $usernameDB = $re['userName'];
                $userCreationDate = $re['userCreationDate'];
            }
        }

        if($oldPassHash = $pwordDB){
            if($pwordHash == $pwordConfirmHash){
                try{
                    $sql = "UPDATE userssoftwaresecurity SET email = :email, password = :password, userName = :username, userCreationDate = :UCR WHERE userID = :userID";
                    $sql = $db->prepare($sql);
                    $sql->bindParam(':email',$email);
                    $sql->bindParam(':password',$pwordHash);
                    $sql->bindParam(':username',$usernameDB);
                    $sql->bindParam(':UCR',$userCreationDate);
                    $sql->bindParam(':userID',$_SESSION["loggedInUserID"]);
                    $sql->execute();
                }
                catch(PDOException $e){
                    die("There was an error updating your email address.");
                }
                ?>
                
                <meta http-equiv="refresh" content="0; URL='index.php?action=userSettings'"/>
                
                <?php
            }
            else{
                echo "New passwords do not match.";
            }
        }
        else{
            echo "Password incorrect.";

            include_once("index.php?action=updateEmail");
        }





    }
    
    function fortniteAPICall($method, $url)
    {
        $curl = curl_init();

        switch($method)
        {
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);
                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_PUT, 1);
                break;
            default:
                
        }

        $result = curl_exec($curl);

        curl_close($curl);
        
        return $result;
    }












?>