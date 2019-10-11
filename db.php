<?php

    $dsn ="";
    $userName = "";
    $pword = "";
    
    try{
        $db = new PDO($dsn, $userName, $pword);
    }
    catch(PDOException $e){
        die("Can't connect to the database" . "<br>" . $e);
    }



?>
