<?php

function addProduct (&$message, $productName, $productDescription , $productImage, $productPrice) {

    $db = Database\Connection::getInstance();
    $conn = $db->getConnection();

    try {
        $sql = "INSERT INTO product (Name, Description, Image, Price) VALUES (?, ?, ?, ?)";
        $q = $conn->prepare($sql);
        $q->execute(array($productName, $productDescription , $productImage, $productPrice));
        $message = "New record created successfully";
    }
    catch(\PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
    header("Location: showProductsController.php?message=". $message);
}
