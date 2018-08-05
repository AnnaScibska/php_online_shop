<?php

function addUser ($user) {

    $conn = \Database\Connection::connect();

    try {
        $sql = "INSERT INTO user (_user_FirstName, _user_Email, _user_Password) VALUES (?, ?, ?)";
        $query = $conn->prepare($sql);
        $query->execute(array($user->_user_FirstName, $user->_user_Email, $user->_user_Password));
    }
    catch(\PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

    Database\Connection::disconnect();
}