<?php

require_once '../../Autoloader.php';
Autoloader::register();
session_start();

$title = 'Update Product';
$message = '';
$pageToDisplay = 'product/updateProductView.php';

$id = null;

if (!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
} else {
    header("Location: showProductsController.php");
}

if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {

    $product = new App\Product();

    $product->_product_Name = $_POST['product_name'];
    $product->_product_Type = $_POST['product_type'];
    $product->_product_Description = $_POST['product_description'];
    $product->_product_Image = $_POST['product_image'];
    $product->_product_Price = $_POST['product_price'];
    $product->_product_Id = $_POST['product_id'];

    $product->updateProduct($product);
    $message = "Product updated successfully";
    header("Location: showProductsController.php?message=". $message);

} else {

    // TODO create Product Factory class with a method findProduct, which creates (return) object: Product
    $product = new App\Product();
    $product = $product->findProduct($id);
}

require_once '../../view/mainView.php';