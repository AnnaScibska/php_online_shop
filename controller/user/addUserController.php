<?php

require_once '../../Autoloader.php';
require_once '../../database/addUserModel.php';
Autoloader::register();
session_start();

$title = 'Register';
$message = '';
$pageToDisplay = 'user/addUserView.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {

    $product = new App\User();

    $product->_user_FirstName = $_POST['user_name'];
    $product->_user_Email = $_POST['user_email'];
    $product->_user_Password = $_POST['user_password'];

    addUser($product);
    $message = "You have registered successfully";
    header("Location: ../product/showProductsController.php?message=". $message);
}

require_once '../../view/mainView.php';