<?php

    $dsn = "mysql:host=ict.neit.edu:5500;dbname=budgetbuddy";
    $userName = "BudgetBuddy";
    $pword = "neit2018";
    
    try{
        $db = new PDO($dsn, $userName, $pword);
    }
    catch(PDOException $e){
        die("Can't connect to the database" . "<br>" . $e);
    }



?>