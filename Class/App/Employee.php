<?php
namespace App;

class Employee
{
    private $_superior;
    private $_password;
//    TODO : add commented properties
//    private $_birthDate;
//    private $_socialSecurityNB;
//    private $_function;
//    private $_salary;


    // no getters and setters; possibility to add/edit/remove admin/employee only directly in a DB

    // authentication
    public function adminLogIn ($email, $userPassword) {
        $this->_user_Email = $email;
        $this->_user_Password = $userPassword;

        $conn = \Database\Connection::connect();

        try {
            $sql = "SELECT * FROM employee WHERE _user_Email = ? AND _user_Password = ? LIMIT 1;";
            $q = $conn->prepare($sql);
            $q->execute(array($email, $userPassword));
            if($q->rowCount()) {
                while ($row = $q->fetch()) {
                    $this->_user_FirstName = $row['_user_FirstName'];
                    $this->_user_Id = $row['_user_Id'];
                }
            }
        }
        catch(\PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }

        \Database\Connection::disconnect();
    }

    // finding user in the DB
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

        \Database\Connection::disconnect();

        return $user;
    }

    // updating a user
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

        \Database\Connection::disconnect();
    }

    // adding a new user
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

        \Database\Connection::disconnect();
    }

    // removing a user
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

        \Database\Connection::disconnect();
    }

}

