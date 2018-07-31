<?php

function updateProduct ($productId, $productName, $productType, $productDescription , $productImage, $productPrice) {

    $conn = \Database\Connection::connect();
    try {
        $sql = "UPDATE product SET Name = ?, Type = ?, Description = ?, Image = ?, Price = ? WHERE Id = ?";
        $q = $conn->prepare($sql);
        $q->execute(array($productName, $productType, $productDescription, $productImage, $productPrice, $productId));
    }
    catch(\PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

    Database\Connection::disconnect();
}

function findProduct($id) {

    $conn = \Database\Connection::connect();

    try {
        $sql = "SELECT Id, Name, Type, Description, Image, Price FROM product WHERE Id = ?;";
        $q = $conn->prepare($sql);
        $q->execute(array($id));
        $product = $q->fetch(\PDO::FETCH_ASSOC);
    }
    catch(\PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

    Database\Connection::disconnect();

    return $product;
}