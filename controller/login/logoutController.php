<?php
session_start();
// DIDN'T WORK:
//session_destroy();
//unset($_SESSION);
//session_unset();
$_SESSION = []; // Finally works properly
$message = "You have log out successfully";
header('Location: ../product/showProductsController.php?message='.$message);