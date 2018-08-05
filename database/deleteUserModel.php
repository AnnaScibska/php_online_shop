<?php

function removeUser($user) {
    $conn = \Database\Connection::connect();

    try {
        $sql = "DELETE FROM user WHERE _user_Id = ?";
        $q = $conn->prepare($sql);
        $q->execute(array($user->_user_Id));
    }
    catch(\PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

    Database\Connection::disconnect();
}

function findUser($id) {

    $conn = \Database\Connection::connect();

    try {
        $sql = "SELECT * FROM user WHERE _user_Id = ?;";
        $q = $conn->prepare($sql);
        $q->execute(array($id));
        $user = $q->fetchObject('\App\User');
    }
    catch(\PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

    Database\Connection::disconnect();

    return $user;
}