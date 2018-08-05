<?php

function updateUser ($user) {

    $conn = \Database\Connection::connect();
    try {
        $sql = "UPDATE user SET _user_FirstName = ?, _user_Email = ?, _user_Password = ? WHERE _user_Id = ?";
        $q = $conn->prepare($sql);
        $q->execute(array($user->_user_FirstName, $user->_user_Email, $user->_user_Password, $user->_user_Id));
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