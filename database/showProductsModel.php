<?php

function getAllProducts() {

    $conn = \Database\Connection::connect();

    try {
        $stmt = $conn->prepare("SELECT Id, Name, Type, Description, Image, Price FROM product");
        $stmt->execute();
    }
    catch(\PDOException $e)
    {
        echo $stmt . "<br>" . $e->getMessage();
    }

    $products = array();
    foreach ($stmt->fetchAll() as $row)
    {
        $products[] = $row;
    }

    Database\Connection::disconnect();

    return $products;
}

