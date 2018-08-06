<?php
// calling Autoloader
require_once '../../Autoloader.php';
Autoloader::register();
// access to $_SESSION variables if need
session_start();

// passing a page title
$title = 'List of Products';
$message = '';

// accessing "message" sent over GET
if(!empty($_GET['message'])){
    $message = $_REQUEST['message'];
}

// creating a new object of a Product Class
$product = new \App\Product();
// using a Product method to fetch all the records from the DB
$products = $product->getAllProducts();
// passing template to View
$pageToDisplay = 'product/showProductsView.php';

// calling main View
require_once '../../view/mainView.php';