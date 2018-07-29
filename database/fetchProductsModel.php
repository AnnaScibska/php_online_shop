<?php

function getAllProducts() {

    $db = Database\Connection::getInstance();
    $conn = $db->getConnection();

    $stmt = $conn->prepare("SELECT Name, Description, Image, Price FROM product");
    $stmt->execute();

    $products = array();
    foreach ($stmt->fetchAll() as $row)
    {
        $products[] = $row;
    }

    $conn = null;

    return $products;
}

