<?php

require_once '../Autoloader.php';
require_once '../database/deleteProductModel.php';

Autoloader::register();

$title = 'Delete Product';
$message = '';
$pageToDisplay = 'deleteProductView.php';

$id = null;

if (!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
} else {
    header("Location: showProductsController.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
    $id = $_POST['id'];
    removeProduct($id);
    $message = 'Product deleted successfully';
    header("Location: showProductsController.php?message=". $message);
}

require_once '../view/mainView.php';