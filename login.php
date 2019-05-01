<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Commerce Login</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="shared/imageGallery.js"></script>

</head>
<body>
<?php

$loggedIn = filter_input(INPUT_GET, 'loggedIn', FILTER_SANITIZE_STRING) ?? "";

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

if(!isset($_SESSION["loggedIn"]))
{
    $_SESSION["loggedIn"] = null;
}

echo $_SESSION["loggedIn"];

if(isset($_SESSION["loggedIn"]))
{
    ?>
    <meta http-equiv="refresh" content="0; URL='index.php'"/>
    <?php
}

if(!isset($_SESSION['errorMSGlogin']))
{
    $_SESSION['errorMSGlogin'] = null;
}

if(isset($_SESSION['errorMSG']))
{
    $_SESSION['errorMSG'] = null;
}

?>



<span>
    
    <div class="col-xs-12 hidden-sm hidden-md hidden-lg">

        <div id="loginPageXS">

            <h1 id="registerBBXS">E-Commerce</h1>

            <h3 id="BBmotto">Please sign in.</h3>

            <br>

            <form action="index.php" method="get" align="center">

                <input type="text" name="emailVar" id="emailVarLogin" pattern="[A-z,0-9]{2,}@[A-z]{2,}.[A-z]{2,}" title="example@email.com" placeholder="email" value="" required>

                <br><br>

                <input type="password" name="passwordVar" id="passwordVarLogin" placeholder="password" required />

                <br><br><br>

                <p style="color:red;"><?php  echo $_SESSION['errorMSGlogin']  ?></p>

                <div id="loginButtonsDiv">

                    <input type="submit" name="action" id="newLoginButton2" style="margin-left:40px;" value="Login">

                    <button id="newLoginButton1" onclick="window.location.href = 'landingpage.php';">Back</button>

                </div>

            </form>

            <p id="signupLinkLoginXS">Need an account? <a id="registerLinkXS" href="register.php">Register here</a></p>

        </div>

    </div>

    <div class="hidden-xs col-sm-12 col-md-12 hidden-lg">

        <div id="loginPageXS" style="margin-top:0% !important; padding:15px;">

            <h1 id="registerBBXS">E-Commerce</h1>

            <h3 id="BBmotto">Please sign in.</h3>

            <br>

            <form action="index.php" method="get" align="center">

                <input type="text" name="emailVar" id="emailVarLogin" pattern="[A-z,0-9]{2,}@[A-z]{2,}.[A-z]{2,}" title="example@email.com" placeholder="email" value="" required>

                <br><br>

                <input type="password" name="passwordVar" id="passwordVarLogin" placeholder="password" required>

                <br><br><br>

                <p style="color:red;"><?php  echo $_SESSION['errorMSGlogin']  ?></p>

                <div id="loginButtonsDiv">

                    <input type="submit" name="action" id="newLoginButton2" style="margin-left:40px;" value="Login">

                    <button id="newLoginButton1" onclick="window.location.href = 'landingpage.php';">Back</button>

                </div>

            </form>

            <p id="signupLinkLoginXS">Need an account? <a id="registerLinkXS" href="register.php">Register here</a></p>

        </div>

    </div>    

    <div class="hidden-xs hidden-sm hidden-md col-lg-12">

        <h1 id="registerBB">E-Commerce</h1>

        <h3 id="loginMotto">Please sign in.</h3>

        <form action="index.php" method="get" align="center">

            <input type="text" name="emailVar" id="emailVarLogin" pattern="[A-z,0-9]{2,}@[A-z]{2,}.[A-z]{2,}" title="example@email.com" placeholder="email" value="" required>

            <br><br>

            <input type="password" name="passwordVar" id="passwordVarLogin" placeholder="password" required>

            <br><br><br>

            <p style="color:red;"><?php  echo $_SESSION['errorMSGlogin']  ?></p>

            <div id="loginButtonsDiv">

                <input type="submit" name="action" id="newLoginButton2" value="Login">

                <button id="newLoginButton1" onclick="window.location.href = 'landingpage.php';">Back</button>

            </div>

        </form>

        <p id="signupLinkLogin">Need an account?<a id="registerLink" href="register.php">Register here</a></p>

    </div>

</span>
</body>
</html>
    
