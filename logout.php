<link rel="stylesheet" type="text/css" href="stylesheet.css">

<?php

    if(!isset($_SESSION[""])){
        session_start();
    }

    unset($_SESSION["loggedInUsername"]);
    unset($_SESSION["loggedIn"]);
    unset($_SESSION["loggedInUserID"]);
    unset($_SESSION['errorMSGlogin']);

    ?>

    <br>

    <meta http-equiv="refresh" content="0; URL='landingPage.php'"/>
