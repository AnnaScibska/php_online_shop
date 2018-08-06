<?php

/*
 DOESN'T WORK YET!!!!!!!!!!!
 TODO rediarect if no id
 */

require_once '../../Autoloader.php';
Autoloader::register();
session_start();

$id = null;

if (!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
} else {
    header("Location: ../product/showProductsController.php");
}

$message = '';

$product = new \App\Product();
$product = $product->findProduct($id);

if (!isset($_SESSION['cart'][$product->_product_Id])) {
    $_SESSION['cart']['products'][$product->_product_Id] = 1;
}

if (isset($_SESSION['user'])) {
    $_SESSION['cart']['_user_Id'] = $_SESSION['user']->_user_Id;
}

$message = "<strong>".$product->_product_Name. "</strong> added to the cart successfully";
header("Location: ../product/showProductsController.php?message=". $message);