<?php

require_once '../Autoloader.php';
require_once '../database/addProductModel.php';

Autoloader::register();

$title = 'Add Product';
$message = '';
$pageToDisplay = 'addProductView.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
    $productName = $_POST['product_name'];
    $productType = $_POST['product_type'];
    $productDescription = $_POST['product_description'];
    $productImage = $_POST['product_image'];
    $productPrice = $_POST['product_price'];

    addProduct($message, $productName, $productType, $productDescription , $productImage, $productPrice);
    $message = "New record created successfully";
    header("Location: showProductsController.php?message=". $message);
}

require_once '../view/mainView.php';