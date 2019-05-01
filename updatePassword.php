<div id="backButtonDivXS" class="col-xs-12">

    <a id="backButtonXS" href="index.php?action=userSettings">Back</a>

</div>


<div class="col-xs-12 hidden-sm hidden-md hidden-lg">

    <div id="userEmailChangeDiv">
    
        <form action="index.php" method="get">        

            <input type="password" name="oldPasswordVar" id="passwordUpdateInput" placeholder="old password" required>

            <input type="password" name="passwordVar" id="passwordUpdateInput" placeholder="new password" required>
            <input type="password" name="passwordVarConfirm" id="passwordUpdateInput" placeholder="confirm password" required>

            <center><h5 id="usernameChangeID">User ID: <?php echo $_SESSION["loggedInUserID"] ?></h5></center>

            <input type="submit" id="usernameChangeInputSubmit" name="action" value="Submit">
            <input type="hidden" name="action" id="updatePasswordSubmit" value="updatePasswordSubmit">


        </form>

    </div>

</div>

<div class="hidden-xs col-sm-12 col-md-12 hidden-lg">

    <div id="userEmailChangeDiv">
    
        <form action="index.php" method="get">        

            <input type="password" name="oldPasswordVar" id="passwordUpdateInput" placeholder="old password" required>

            <input type="password" name="passwordVar" id="passwordUpdateInput" placeholder="new password" required>
            <input type="password" name="passwordVarConfirm" id="passwordUpdateInput" placeholder="confirm password" required>

            <center><h5 id="usernameChangeID">User ID: <?php echo $_SESSION["loggedInUserID"] ?></h5></center>

            <input type="submit" id="usernameChangeInputSubmit" name="action" value="Submit">
            <input type="hidden" name="action" id="updatePasswordSubmit" value="updatePasswordSubmit">


        </form>
        
    </div>

</div>

<div class="hidden-xs hidden-sm hidden-md col-lg-12">

    <div id="userEmailChangeDiv">
    
        <form action="index.php" method="get">        

            <input type="password" name="oldPasswordVar" id="passwordUpdateInput" placeholder="old password" required>

            <input type="password" name="passwordVar" id="passwordUpdateInput" placeholder="new password" required>
            <input type="password" name="passwordVarConfirm" id="passwordUpdateInput" placeholder="confirm password" required>

            <center><h5 id="usernameChangeID">User ID: <?php echo $_SESSION["loggedInUserID"] ?></h5></center>

            <input type="submit" id="usernameChangeInputSubmit" name="action" value="Submit">
            <input type="hidden" name="action" id="updatePasswordSubmit" value="updatePasswordSubmit">


        </form>
        
    </div>

</div>




