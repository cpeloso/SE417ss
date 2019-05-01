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

    if(!isset($_SESSION[""])){
        session_start();
    }

    if(isset($_SESSION['errorMSG']))
    {
        $_SESSION['errorMSG'] = null;
    }

    if(isset($_SESSION['errorMSGlogin']))
    {
        $_SESSION['errorMSGlogin'] = null;
    }

    $loggedIn = filter_input(INPUT_GET, 'loggedIn', FILTER_SANITIZE_STRING) ?? "";
    
    if(isset($_SESSION["loggedIn"]))
    {
        ?>
           <meta http-equiv="refresh" content="0; URL='index.php'"/>
        <?php
    }
    else{
    ?>

    <span>

        <div class="col-xs-12 hidden-sm hidden-md hidden-lg" style="height:100%;">
                
            <div id="landingPageContainerXS">

                
                <h1 id="headerBB">Welcome to E-Commerce</h1>
                <h3 id="BBmotto">Shop around.</h3>

                <a id="landingLoginXS" href="login.php">LOGIN</a>
                <a id="landingSignupXS" href="register.php">REGISTER</a>

            </div>

        </div>

        <div class="hidden-xs col-sm-12 hidden-md hidden-lg">

            <div id="landingPageContainer">

                <h1 id="headerBB">Welcome to E-Commerce</h1>
                <h3 id="BBmotto">Shop around.</h3>

                <a id="landingLogin" href="login.php">LOGIN</a>
                <a id="landingSignup" href="register.php">REGISTER</a>

            </div>

        </div>

        <div class="hidden-xs hidden-sm col-md-12 hidden-lg">

            <div id="landingPageContainer" style="margin-top:15% !important;">

                <h1 id="headerBB">Welcome to E-Commerce</h1>
                <h3 id="BBmotto">Shop around.</h3>

                <a id="landingLogin" href="login.php">LOGIN</a>
                <a id="landingSignup" href="register.php">REGISTER</a>

            </div>

        </div>

        <div class="hidden-xs hidden-sm hidden-md col-lg-12">

            <div id="landingPageContainer">

                <h1 id="headerBB">Welcome to E-Commerce</h1>
                <h3 id="BBmotto">Shop around.</h3>

                <a id="landingLogin" href="login.php">LOGIN</a>
                <a id="landingSignup" href="register.php">REGISTER</a>

            </div>

        </div>



    </span>


    
    
    <?php
    }
    include_once("footer.php");
    ?>
    
</body>
</html>