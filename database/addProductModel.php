<?php

function addProduct ($productName, $productType, $productDescription , $productImage, $productPrice) {

    $conn = \Database\Connection::connect();

    try {
        $sql = "INSERT INTO product (Name, Type, Description, Image, Price) VALUES (?, ?, ?, ?, ?)";
        $q = $conn->prepare($sql);
        $q->execute(array($productName, $productType, $productDescription , $productImage, $productPrice));
    }
    catch(\PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

    Database\Connection::disconnect();
}
