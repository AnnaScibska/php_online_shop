<?php

require_once '../../Autoloader.php';
Autoloader::register();
session_start();

$title = 'List of Users';
$message = '';

if(!empty($_GET['message'])){
    $message = $_REQUEST['message'];
}

$user = new \App\User();
$users = $user->getAllUsers();
$pageToDisplay = 'user/showUsersView.php';

require_once '../../view/mainView.php';