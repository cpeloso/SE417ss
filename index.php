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

        if(!isset($_SESSION)) 
        { 
            session_start(); 
        } 



        include_once("db.php");
        include_once("functions.php");

        $action = ( array_key_exists('action', $_REQUEST) ? $_REQUEST['action'] : "");

        $emailVar = filter_input(INPUT_GET, 'emailVar',FILTER_SANITIZE_EMAIL) ?? "";
        $passwordVar = filter_input(INPUT_GET, 'passwordVar', FILTER_SANITIZE_STRING) ?? "";
        $passwordVarConfirm = filter_input(INPUT_GET, 'passwordVarConfirm', FILTER_SANITIZE_STRING) ?? "";

        $emailVarRegister = filter_input(INPUT_POST, 'emailVar',FILTER_SANITIZE_EMAIL) ?? "";
        $passwordVarRegister = filter_input(INPUT_POST, 'passwordVar', FILTER_SANITIZE_STRING) ?? "";
        $passwordVarConfirmRegister = filter_input(INPUT_POST, 'passwordVarConfirm', FILTER_SANITIZE_STRING) ?? "";

        $username = filter_input(INPUT_GET, 'username', FILTER_SANITIZE_STRING) ?? "";





        switch($action)
        {
            case "Login":
                loginUserFunc($db, $emailVar, $passwordVar);
                break;
            case "registerUser":
                registeruserFunc($db, $emailVar, $passwordVar, $passwordVarConfirm);
                break;
            case "aboutUs":
                include_once("header.php");
                include_once("aboutUs.php");
                include_once("footer.php");
                break;
            case "userSettings":
                include_once("header.php");
                include_once("userSettings.php");
                include_once("footer.php");
                break;
            case "shop":
                include_once("header.php");
                include_once("shop.php");
                include_once("footer.php");
                break;
            case "usernameChange":
                include_once("header.php");
                include_once("usernameChange.php");
                include_once("footer.php");
                break;
            case "submitUsername":
                submitUsernameFunc($db,$username);
                break;
            case "emailUpdate":
                include_once("header.php");
                include_once("updateEmail.php");
                include_once("footer.php");
                break;
            case "updateEmailSubmit":
                include_once("header.php");
                updateEmailFunc($db,$emailVar,$passwordVar);
                include_once("footer.php");
                break;
            case "updatePasswordSubmit":
                updatePasswordFunc($db, $oldPasswordVar, $passwordVar, $passwordVarConfirm);
                break;
            case "passwordUpdate":
                include_once("header.php");
                include_once("updatePassword.php");
                include_once("footer.php");
                break;
            default:
                if(!isset($_SESSION["loggedIn"]))
                {
                    ?>
                        <meta http-equiv="refresh" content="0; URL='landingpage.php'"/>
                    <?PHP
                }
                else{
                    include_once("header.php");
                    include_once("overviewContent.php");
                }
        }


    ?>
</body>
</html>