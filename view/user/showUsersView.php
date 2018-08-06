<div class="container">
    <table>
        <tr><th>Id</th><th>First Name</th><th>Email</th><th>Registration Date</th></tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user->_user_Id ?></td>
                <td><?php echo $user->_user_FirstName ?></td>
                <td><?php echo $user->_user_Email ?></td>
<!--                <td><img src="--><?php //echo $user->_user_Password ?><!--" ></td>-->
                <td><?php echo $user->_user_RegistrationDate ?></td>
                <td><?php echo '<a class="btn btn-success" href="updateUserController.php?id=' .$user->_user_Id. '">Update<a/>' ?></td>
                <td><?php echo '<a class="btn btn-danger" href="deleteUserController.php?id=' .$user->_user_Id. '">Delete<a/>' ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>