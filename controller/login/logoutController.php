<?php
session_start();
//session_destroy();
//unset($_SESSION);
//session_unset();
$_SESSION = [];
$message = "You have log out successfully";
header('Location: ../product/showProductsController.php?message='.$message);