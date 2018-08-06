<?php
namespace App;

abstract class Person
{
    protected $_user_Id;
//    public $lastName;
    protected $_user_FirstName;
    protected $_user_Email;
//    public $address;
//    public $postalCode;
//    public $city;
    //public $birthDate;

    abstract function __get($attr);
    abstract function __set($value, $attr);
//    abstract function modify_info();
}