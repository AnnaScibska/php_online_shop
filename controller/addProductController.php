<?php
require_once '../Autoloader.php';
Autoloader::register();

require_once '../database/addProductModel.php';

$title = 'Add Product';
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
    $productName = $_POST['product_name'];
    $productDescription = $_POST['product_description'];
    $productImage = $_POST['product_image'];
    $productPrice = $_POST['product_price'];

    addProduct($message, $productName, $productDescription , $productImage, $productPrice);
}

$pageToDisplay = 'addProductView.php';

require_once '../view/mainView.php';