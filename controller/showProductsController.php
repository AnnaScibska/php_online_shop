<?php

require_once '../Autoloader.php';
require_once '../database/showProductsModel.php';

Autoloader::register();

$title = 'List of Products';
$message = '';

if(!empty($_GET['message'])){
    $message = $_REQUEST['message'];
}

$products = getAllProducts();
$pageToDisplay = 'showProductsView.php';

require_once '../view/mainView.php';



