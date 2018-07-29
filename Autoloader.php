<?php

class Autoloader
{
    static function register() {
        spl_autoload_register(function($className) {
            $className = str_replace("\\", "/", $className);
            require_once $_SERVER['DOCUMENT_ROOT'] . '/pupuce/Class/' . $className . '.php';
        });

    }
}