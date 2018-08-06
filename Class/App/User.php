<?php
namespace App;

class User extends Person
{
//    TODO : add commented properties
//    public $birthDate;
    private $_user_RegistrationDate;
    private $_user_Password;

    // getter and setter
    public function __get($attr) {
        return $this->$attr;
    }

    public function __set($value, $attr) {
        $this->$attr = $value;
    }

    // authentication
    public function userLogIn ($email, $userPassword) {
        $this->_user_Email = $email;
        $this->_user_Password = $userPassword;

        $conn = \Database\Connection::connect();

        try {
            $sql = "SELECT * FROM user WHERE _user_Email = ? AND _user_Password = ? LIMIT 1;";
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

    // adding/registering a new user
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

    // removing user
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

    // displaying all the users
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
        foreach ($stmt->fetchAll(\PDO::FETCH_CLASS, '\App\User') as $row)
        {
            $users[] = $row;
        }

        \Database\Connection::disconnect();

        return $users;
    }

    // TODO : methods to create
    public function getRegistrationDate() {

    }

    public function displayUser () {

    }
}

