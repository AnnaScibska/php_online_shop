<?php

function getAllUsers() {

    $conn = \Database\Connection::connect();

    try {
        $sql = "SELECT * FROM user";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    catch(\PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

    $users = array();
    foreach ($stmt->fetchAll(PDO::FETCH_CLASS, '\App\User') as $row)
    {
        $users[] = $row;
    }

    Database\Connection::disconnect();

    return $users;
}
