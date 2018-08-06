<div class="container">
    <form method="post" action="updateUserController.php">

        <label class="control-label" for="user_id">Id</label><br/>
        <input name="user_id" type="text" id="user_id" value="<?php echo $user->_user_Id; ?>" readonly ><br/><br/>

        <label class="control-label" for="user_name">First name</label><br/>
        <input name="user_name" type="text" id="user_name" value="<?php echo $user->_user_FirstName; ?>"><br/><br/>

        <label class="control-label" for="user_email">Email</label><br/>
        <input name="user_email" type="email" id="user_email" value="<?php echo $user->_user_Email; ?>"><br/><br/>

<!--possibility of changing password only for the user-->
<!--        <label class="control-label displayNone" for="user_password">Password</label><br/>-->
<!--        <input name="user_password" type="text" id="user_password" value="--><?php //echo $user->_user_Password; ?><!--"><br/><br/>-->

        <label class="control-label" for="user_registration_date">Registration date</label><br/>
        <input name="user_registration_date" type="text" id="user_registration_date" value="<?php echo $user->_user_RegistrationDate; ?>" readonly ><br/><br/>

        <input type="submit" name="submit" value="Update">
        <a href="../../index.php" class="btn">Return</a>
    </form>
</div>