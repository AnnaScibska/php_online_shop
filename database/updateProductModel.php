<?php

function updateProduct ($productId, $productName, $productType, $productDescription , $productImage, $productPrice) {

    $db = Database\Connection::getInstance();
    $conn = $db->getConnection();

    $sql = "UPDATE product SET Name = ?, Type = ?, Description = ?, Image = ?, Price = ? WHERE Id = ?";

    $q = $conn->prepare($sql);
    $q->execute(array($productName, $productType, $productDescription , $productImage, $productPrice, $productId));

    $conn = null;
}

function findProduct($id) {

    $db = Database\Connection::getInstance();
    $conn = $db->getConnection();

    $sql = "SELECT Id, Name, Type, Description, Image, Price FROM product WHERE Id = ?;";

    $q = $conn->prepare($sql);
    $q->execute(array($id));

    $product = $q->fetch(\PDO::FETCH_ASSOC);

    $conn = null;

    return $product;
}