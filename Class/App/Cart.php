<?php
namespace App;

class Cart
{
    private $_cart_Id;
    private $_user_Id;

    function showCart($userId) {
        $conn = \Database\Connection::connect();

        try {

            $sql = "SELECT cartItem._cartItem_Quantity, product._product_Name, product._product_Price
            FROM (((product  
            INNER JOIN cartItem ON product._product_Id = cartItem._product_Id)
            INNER JOIN cart ON cartItem._cart_Id = cart._cart_Id)
            INNER JOIN user ON cart._user_Id = user._user_Id) WHERE user._user_Id = ?";

            $stmt = $conn->prepare($sql);
            $stmt->execute(array($userId));

            $products = array();
            foreach ($stmt->fetchAll() as $row)
            {
                $products[] = $row;
            }

            return $products;

        }
        catch(\PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }

        \Database\Connection::disconnect();
    }

//    TODO: function to create
    function deleteProductFromCart() {}
    function addProductToCart() {}
    function emptyCart() {}
}