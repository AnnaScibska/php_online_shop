<?php

class Product
{
    private $_id;
    private $_name;
    private $_description;
    private $_image;
    private $_price;
    private $_quantity;

    public function __construct($id, $name, $description, $image, $price)
    {
        $this->_id = $id;
        $this->_name = $name;
        $this->_description = $description;
        $this->_image = $image;
        $this->_price = $price;
        $this->_quantity = 0;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function getProductInfo()
    {

    }

    public function updateProduct()
    {

    }

    public function deleteProduct()
    {

    }

}