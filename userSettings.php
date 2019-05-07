<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Settings</title>
</head>
<body>
    
    <h4 style="text-align:center;font-weight:bold;font-size:24px;">User Settings</h2>

    <div id="profilePicDiv">
    <center><p style="margin-top:40%;font-weight:bold;font-family:impact,arial;font-size:24px"><?php

$results = usernamePull($db);

if($results != null){
    echo end($results[0]);
}
else{
    echo "username";
}

?></p></center>
    </div>

    <h1 style="text-align:center;font-weight:bold;margin-bottom:45px;">
        
    </h1>

    <center><a id="editUsernameBtn" href="?action=usernameChange" tabIndex=1>Change username</a></center>
    <center><a id="editUsernameBtn" href="?action=emailUpdate" tabIndex=2>Update email</a></center>
    <center><a id="editUsernameBtn" href="?action=passwordUpdate" tabIndex=3>Update password</a></center><br>
    <center><a id="editUsernameBtn" href="logout.php" tabIndex=4>Logout</a></center>

    <br><br><br><br>

</body>
</html>