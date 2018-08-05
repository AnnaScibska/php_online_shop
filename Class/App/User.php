<?php
namespace App;

class User extends Person
{
//    public $birthDate;
    private $_user_RegistrationDate;
    private $_user_Password;

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

    public function __construct()
    {

    }

    public function __get($attr) {
        return $this->$attr;
    }

    public function __set($value, $attr) {
        $this->$attr = $value;
    }

    public function getRegistrationDate() {

    }

    public function displayUser () {

    }

    public function updateUser () {

    }

    public function deleteUser() {

    }

}