<?php

function getAllProducts() {

    $conn = \Database\Connection::connect();

    try {
        $sql = "SELECT _product_Id, _product_Name, _product_Type, _product_Description, _product_Image, _product_Price, _product_Quantity FROM product";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    catch(\PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

    $products = array();
    foreach ($stmt->fetchAll(PDO::FETCH_CLASS, '\App\Product') as $row)
    {
        $products[] = $row;
    }

    Database\Connection::disconnect();

    return $products;
}
