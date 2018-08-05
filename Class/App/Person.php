<?php
namespace App;

abstract class Person
{
    private $_user_Id;
//    public $lastName;
    private $_user_FirstName;
    private $_user_Email;
//    public $address;
//    public $postalCode;
//    public $city;
    //public $birthDate;

    abstract function __get($attr);
    abstract function __set($value, $attr);
//    abstract function modify_info();
}