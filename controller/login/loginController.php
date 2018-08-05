<?php
require_once '../../Autoloader.php';
Autoloader::register();


$title = 'Login';
$message = '';
$pageToDisplay = 'loginView.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["user_email"];
    $userPassword = $_POST["user_password"];

    $user = new \App\User();
    $user->userLogIn($email, $userPassword);
    if($user->_user_FirstName != "") {
        session_start();
        $_SESSION['user'] = $user;
        $_SESSION['message'] = 'in session...';
        $message = "You're in!";
        header("Location: ../product/showProductsController.php?message=". $message);
        die;
    } else {
        echo "nope";
    }
}

require_once '../../view/mainView.php';