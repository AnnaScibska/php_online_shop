<div class="container">
    <form method="post" action="loginController.php">

        <label class="control-label" for="user_email">Email</label><br/>
        <input name="user_email" type="email" id="user_email"><br/><br/>

        <label class="control-label" for="user_password">Password</label><br/>
        <input name="user_password" type="password" id="user_password"><br/><br/>

        <input name="admin" type="checkbox" value="admin" id="admin">
        <label class="control-label" for="admin">Log as admin</label><br/><br/>

        <input type="submit" name="login" value="Login">
        <a href="addUserController.php" class="btn">Register</a>

    </form>
</div>

