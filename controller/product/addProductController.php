<?php

require_once '../../Autoloader.php';
Autoloader::register();
session_start();

$title = 'Add Product';
$message = '';
$pageToDisplay = 'product/addProductView.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {

    $product = new App\Product();

    $product->_product_Name = $_POST['product_name'];
    $product->_product_Type = $_POST['product_type'];
    $product->_product_Description = $_POST['product_description'];
    $product->_product_Image = $_POST['product_image'];
    $product->_product_Price = $_POST['product_price'];

    $product->addProduct($product);
    $message = "New record created successfully";
    header("Location: showProductsController.php?message=". $message);
}

require_once '../../view/mainView.php';