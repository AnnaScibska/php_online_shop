<?php

require_once '../../Autoloader.php';
Autoloader::register();
session_start();

$title = 'Cart';
$message = '';

if(!empty($_GET['message'])){
    $message = $_REQUEST['message'];
}

$product = new \App\Product();

$products = $product->getAllProducts();
$pageToDisplay = 'cart/showCartView.php';

$cart = new \App\Cart();
$products = $cart->showCart($_SESSION['user']->_user_Id);

$nb = 1;
$productsPrice = 0;
$total = 0;

require_once '../../view/mainView.php';