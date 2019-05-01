<header>
<link rel="stylesheet" type="text/css" href="stylesheet.css">

    <?php

    if(!isset($_SESSION["loggedIn"])){
        ?>
        <meta http-equiv="refresh" content="0; URL='landingpage.php'"/>
        <?php
    }
    ?>

    <div id="headerDiv1">

        <h2 id="headerBrand">E-Commerce</h2>


        <a id="logoutButton" href="logout.php">Logout</a>

        <div id="headerBtn1">
            <a href="overviewContent.php" id="headerBtn1BTN">Overview</a>
        </div>


    </div>






    

</header>