<?php

function removeProduct($id) {
    $conn = \Database\Connection::connect();

    try {
        $sql = "DELETE FROM product WHERE Id = ?";
        $q = $conn->prepare($sql);
        $q->execute(array($id));
    }
    catch(\PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

    Database\Connection::disconnect();
}