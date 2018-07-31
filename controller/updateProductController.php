<?php

require_once '../Autoloader.php';
require_once '../database/updateProductModel.php';

Autoloader::register();

$title = 'Update Product';
$message = '';
$pageToDisplay = 'updateProductView.php';

$id = null;

if (!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
} else {
    header("Location: showProductsController.php");
}

if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {

    $productName = $_POST['product_name'];
    $productType = $_POST['product_type'];
    $productDescription = $_POST['product_description'];
    $productImage = $_POST['product_image'];
    $productPrice = $_POST['product_price'];
    $productId = $_POST['product_id'];

    updateProduct ($productId, $productName, $productType, $productDescription , $productImage, $productPrice);
    $message = "Product updated successfully";
    header("Location: showProductsController.php?message=". $message);

} else {

    $product = findProduct($id);

    $productName = $product['Name'];
    $productType = $product['Type'];
    $productDescription = $product['Description'];
    $productImage = $product['Image'];
    $productPrice = $product['Price'];
    $productId = $product['Id'];

}

require_once '../view/mainView.php';