<?php

require_once '../../Autoloader.php';
Autoloader::register();
session_start();

$title = 'Delete Product';
$message = '';
$pageToDisplay = 'product/deleteProductView.php';

$id = null;

if (!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
} else {
    header("Location: showProductsController.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {

    $id = $_POST['id'];
    $product = new \App\Product();
    $product = $product->findProduct($id);
    $product->removeProduct($product);
    $message = 'Product deleted successfully';
    header("Location: showProductsController.php?message=". $message);

} else {
    // TODO create Product Factory class with a method findProduct, which creates (return) object: Product
    $product = new \App\Product();
    $product = $product->findProduct($id);
}

require_once '../../view/mainView.php';