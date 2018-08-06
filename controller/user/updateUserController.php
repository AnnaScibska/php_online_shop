<?php

// TODO remove regDate, changes while update

require_once '../../Autoloader.php';
Autoloader::register();
session_start();

$title = 'Update User';
$message = '';
$pageToDisplay = 'user/updateUserView.php';

$id = null;

if (!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
} else {
    header("Location: showUsersController.php");
}

if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {

    $user = new App\User();

    $user->_user_FirstName = $_POST['user_name'];
    $user->_user_Email = $_POST['user_email'];
    $user->_user_Password = $_POST['user_password'];
    $user->_user_RegistrationDate = $_POST['user_registration_date'];
    $user->_user_Id = $_POST['user_id'];

    $user->updateUser($user);
    $message = "User updated successfully";
    header("Location: showUsersController.php?message=". $message);

} else {

    $user = new \App\User();
    $user = $user->findUser($id);
}

require_once '../../view/mainView.php';