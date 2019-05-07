<div id="backButtonDivXS" class="col-xs-12">

    <a id="backButtonXSusername" href="?action=userSettings">Back</a>
    
</div>

<div id="usernameChangeContainer2">

    <form action="index.php" method="get">

        <input type="text" maxlength="15" id="usernameChangeInputBox" name="username" placeholder="Enter a username" value="" tabIndex=1/>

        <center>
            <h5 id="usernameChangeID2">User ID: <?php echo $_SESSION["loggedInUserID"] ?></h5>
        </center>

        <input type="submit" id="usernameChangeInputSubmit" name="action" value="Submit" tabIndex=2>
        <input type="hidden" name="action" id="usernameChangeInputSubmit" value="submitUsername">


    </form>

</div>