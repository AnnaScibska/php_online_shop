<?php

require_once '../../Autoloader.php';
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
    $user = new App\User();
    $user = $user->findUser($id);
    $user->removeUser($user);
    $message = 'User deleted successfully';
    header("Location: showUsersController.php?message=". $message);
}

$user = new \App\User();
$user = $user->findUser($id);

require_once '../../view/mainView.php';