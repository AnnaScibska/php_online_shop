<div class="container">
    <table>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Email</th>
            <th>Registration Date</th>
        </tr>
        <tr>
            <td><?php echo $user->_user_Id ?></td>
            <td><?php echo $user->_user_FirstName ?></td>
            <td><?php echo $user->_user_Email ?></td>
            <td><?php echo $user->_user_RegistrationDate ?></td>
        </tr>
    </table>
    <form method="post" action="deleteUserController.php"><br>
        <input type="hidden" name="id" value="<?php echo $id;?>"/>Are you sure to delete ?<br><br>
        <div class="form-actions">
            <button type="submit" class="btn btn-danger">Yes</button>
            <a class="btn" href="../../index.php">No</a>
        </div>
    </form>

</div>