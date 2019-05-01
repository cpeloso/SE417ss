<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Commerce Register</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="shared/imageGallery.js"></script>
</head>
<body>
    <!--<div id="registerPageContainer">-->
        <?php
        $loggedIn = filter_input(INPUT_GET, 'loggedIn', FILTER_SANITIZE_STRING) ?? "";

        if(!isset($_SESSION)) 
        { 
            session_start(); 
            $_SESSION['errorMSG'] = "";
        } 

        if(isset($_SESSION["loggedIn"]))
        {
            ?>
            <meta http-equiv="refresh" content="0; URL='index.php'"/>
            <?php
        }
        if(isset($_SESSION['errorMSGlogin']))
        {
            $_SESSION['errorMSGlogin'] = null;
        }

        ?>

        <div class="col-xs-12 hidden-sm hidden-md hidden-lg">

            <div id="registerPageContainerXS">

                <h1 id="registerBBXS">E-Commerce</h1>

                <h3 id="BBmotto">Shop around.</h3>

                <form action="index.php" method="get" align="center">

                    <input type="text" name="emailVar" id="emailVarRegister" pattern="[A-z,0-9]{2,}@[A-z]{2,}.[A-z]{2,}" title="example@email.com" placeholder="email" value="" required>

                    <br><br>

                    <input type="password" name="passwordVar" id="passwordVarRegister" placeholder="password" required>

                    <br><br>

                    <input type="password" name="passwordVarConfirm" id="passwordVarConfirmRegister" placeholder="confirm password" required>

                    <br><br><br>

                    <p id="errorMsg" style="color:red;"><?php echo $_SESSION['errorMSG'] ?></p>

                    <input type="submit" name="action" id="registerButton" value="Sign Up">
                    <input type="hidden" name="action" id="registerButton" value="registerUser">

                </form>


                <p id="signupLinkLoginXS">Already have an account? <a id="registerLinkXS" href="login.php">Log in here</a></p>


            </div>

        </div>

        <div class="hidden-xs col-sm-12 col-md-12 hidden-lg">

            <div id="registerPageContainerXS" style="margin-top:0% !important; padding:15px;">

                <h1 id="registerBBXS">E-Commerce</h1>

                <h3 id="BBmotto">Shop around.</h3>

                <form action="index.php" method="get" align="center">
                    
                    <input type="text" name="emailVar" id="emailVarRegister" pattern="[A-z,0-9]{2,}@[A-z]{2,}.[A-z]{2,}" title="example@email.com" placeholder="email" value="" required>

                    <br><br>

                    <input type="password" name="passwordVar" id="passwordVarRegister" placeholder="password" required>

                    <br><br>

                    <input type="password" name="passwordVarConfirm" id="passwordVarConfirmRegister" placeholder="confirm password" required>

                    <br><br><br>

                    <p id="errorMsg" style="color:red;"><?php echo $_SESSION['errorMSG'] ?></p>

                    <input type="submit" name="action" id="registerButton" value="Sign Up">
                    <input type="hidden" name="action" id="registerButton" value="registerUser">

                </form>


                <p id="signupLinkLoginXS">Already have an account? <a id="registerLinkXS" href="login.php">Log in here</a></p>


            </div>

        </div>

        <div class="hidden-xs hidden-sm hidden-md col-lg-12">

            <h1 id="registerBB">E-Commerce</h1>

            <h3 id="registerMotto">Shop around.</h3>

            <br><br>

            <form action="index.php" method="get" align="center">
                <input type="text" name="emailVar" id="emailVarRegister" pattern="[A-z,0-9]{2,}@[A-z]{2,}.[A-z]{2,}" title="example@email.com" placeholder="email" value="" required>

                <br><br>

                <input type="password" name="passwordVar" id="passwordVarRegister" placeholder="password" required>

                <br><br>

                <input type="password" name="passwordVarConfirm" id="passwordVarConfirmRegister" placeholder="confirm password" required>

                <br><br><br>

                <input type="submit" name="action" id="registerButton" value="Sign Up">
                
                <input type="hidden" name="action" id="registerButton" value="registerUser">

            </form>

            <p id="signupLinkLogin">Already have an account?<a id="registerLink" href="login.php">Log in here</a></p>

        </div>

        

    <!--</div>-->

</body>
</html>