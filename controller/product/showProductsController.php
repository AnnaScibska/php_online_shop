<?php

require_once '../../Autoloader.php';
require_once '../../database/showProductsModel.php';
Autoloader::register();
session_start();

$title = 'List of Products';
$message = '';

if(!empty($_GET['message'])){
    $message = $_REQUEST['message'];
}

$products = getAllProducts();
$pageToDisplay = 'product/showProductsView.php';

require_once '../../view/mainView.php';