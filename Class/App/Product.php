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

//    public function __construct($id = 0, $name = "", $product_Type = "", $description= "", $image= "", $price = 0)
//    {
//        $this->_product_Id = $id;
//        $this->_product_Name = $name;
//        $this->_product_Type = $product_Type;
//        $this->_product_Description = $description;
//        $this->_product_Image = $image;
//        $this->_product_Price = $price;
//        $this->_product_Quantity = 0;
//    }

    public function __construct()
    {

    }

    public function __get($attr) {
        return $this->$attr;
    }

    public function __set($value, $attr) {
        $this->$attr = $value;
    }

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

    public function getProductInfo()
    {

    }

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

}