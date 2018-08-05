<?php

require_once '../../Autoloader.php';
require_once '../../database/deleteUserModel.php';
Autoloader::register();
session_start();

$title = 'Delete User';
$message = '';
$pageToDisplay = 'user/deleteUserView.php';

$id = null;

if (!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
} else {
    header("Location: showUsersController.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {


    $id = $_POST['id'];
    $user = findUser($id);
    removeUser($user);
    $message = 'User deleted successfully';
    header("Location: showUsersController.php?message=". $message);
}

$user = findUser($id);

require_once '../../view/mainView.php';