<?php

require_once '../../Autoloader.php';
require_once '../../database/showUsersModel.php';
Autoloader::register();
session_start();

$title = 'List of Users';
$message = '';

if(!empty($_GET['message'])){
    $message = $_REQUEST['message'];
}

$users = getAllUsers();
$pageToDisplay = 'user/showUsersView.php';

require_once '../../view/mainView.php';