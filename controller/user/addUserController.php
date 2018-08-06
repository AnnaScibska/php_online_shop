<?php

require_once '../../Autoloader.php';
Autoloader::register();
session_start();

$title = 'Register';
$message = '';
$pageToDisplay = 'user/addUserView.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {

    $user = new App\User();

    $user->_user_FirstName = $_POST['user_name'];
    $user->_user_Email = $_POST['user_email'];
    $user->_user_Password = $_POST['user_password'];

    $user->addUser($user);
    $message = "You have registered successfully";
    header("Location: ../product/showProductsController.php?message=". $message);
}

require_once '../../view/mainView.php';