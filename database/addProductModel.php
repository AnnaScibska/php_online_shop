<?php

function addProduct (&$message, $productName, $productType, $productDescription , $productImage, $productPrice) {

    $db = Database\Connection::getInstance();
    $conn = $db->getConnection();

    try {
        $sql = "INSERT INTO product (Name, Type, Description, Image, Price) VALUES (?, ?, ?, ?, ?)";
        $q = $conn->prepare($sql);
        $q->execute(array($productName, $productType, $productDescription , $productImage, $productPrice));
    }
    catch(\PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}
