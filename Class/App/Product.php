<?php
namespace App;

class Product
{
    private $_product_Id;
    private $_product_Name;
    private $_product_Type;
    private $_product_Description;
    private $_product_Image;
    private $_product_Price;
    private $_product_Quantity;

    // getter and setter

    public function __get($attr) {
        return $this->$attr;
    }

    public function __set($value, $attr) {
        $this->$attr = $value;
    }

    // adding a new product
    function addProduct ($product) {

        $conn = \Database\Connection::connect();

        try {
            $sql = "INSERT INTO product (_product_Name, _product_Type, _product_Description, _product_Image, _product_Price) VALUES (?, ?, ?, ?, ?)";
            $query = $conn->prepare($sql);
            $query->execute(array($product->_product_Name, $product->_product_Type, $product->_product_Description, $product->_product_Image, $product->_product_Price));
        }
        catch(\PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }

        \Database\Connection::disconnect();
    }

//    getProductInfo()
    function findProduct($id) {

        $conn = \Database\Connection::connect();

        try {
            $sql = "SELECT * FROM product WHERE _product_Id = ?;";
            $q = $conn->prepare($sql);
            $q->execute(array($id));
            $product = $q->fetchObject('\App\Product');
        }
        catch(\PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }

        \Database\Connection::disconnect();

        return $product;
    }

//    updating a product
    function updateProduct ($product) {

        $conn = \Database\Connection::connect();
        try {
            $sql = "UPDATE product SET _product_Name = ?, _product_Type = ?, _product_Description = ?, _product_Image = ?, _product_Price = ? WHERE _product_Id = ?";
            $q = $conn->prepare($sql);
            $q->execute(array($product->_product_Name, $product->_product_Type, $product->_product_Description, $product->_product_Image, $product->_product_Price, $product->_product_Id));
        }
        catch(\PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }

        Database\Connection::disconnect();
    }

//    removing product
    function removeProduct($product) {
        $conn = \Database\Connection::connect();

        try {
            $sql = "DELETE FROM product WHERE _product_Id = ?";
            $q = $conn->prepare($sql);
            $q->execute(array($product->_product_Id));
        }
        catch(\PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }

        \Database\Connection::disconnect();
    }

// displaying all the products
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
        foreach ($stmt->fetchAll(\PDO::FETCH_CLASS, '\App\Product') as $row)
        {
            $products[] = $row;
        }

        \Database\Connection::disconnect();

        return $products;
    }

}