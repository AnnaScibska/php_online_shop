<?php

require_once '../Autoloader.php';
Autoloader::register();

$message=0;

if(!empty($_GET['message'])){
    $message = $_REQUEST['message'];
}

require_once '../database/fetchProductsModel.php';

$title = 'List of Products';
$products = getAllProducts();
$pageToDisplay = 'showProductsView.php';

require_once '../view/mainView.php';



