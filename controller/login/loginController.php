<?php
// autoloader used to load classes (with namespaces)
require_once '../../Autoloader.php';
Autoloader::register();

// page title
$title = 'Login';
$message = '';
// template to display
$pageToDisplay = 'loginView.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){

    //used when admin checkbox checked
    if(isset($_POST["admin"]) && $_POST["admin"] == "admin") {
        $email = $_POST["user_email"];
        $userPassword = $_POST["user_password"];

        //creating object of a Class
        $employee = new \App\Employee();
        // logging in and adding properties to created object, using a Class method
        $employee->adminLogIn($email, $userPassword);


        if($employee->_user_FirstName != "") {
            // creating a session if logging in successfully
            session_start();
            // remembering logged employee as a user for a session
            $_SESSION['user'] = $employee;
            // preparing a message to display
            $message = "Hello " .$_SESSION['user']->_user_FirstName. "!";
            // redirecting
            header("Location: ../product/showProductsController.php?message=". $message);
            die;
        } else {
            // message to display
            $message = "Invalid email or password";
        }
    }
    // used by client
    else {
        $email = $_POST["user_email"];
        $userPassword = $_POST["user_password"];

        //creating object of a Class
        $user = new \App\User();
        // logging in and adding properties to created object, using a Class method
        $user->userLogIn($email, $userPassword);

        if($user->_user_FirstName != "") {
            // creating a session if logging in successfully
            session_start();
            // remembering logged client as a user for a session
            $_SESSION['user'] = $user;
            // preparing a message to display
            $message = "Hello " .$_SESSION['user']->_user_FirstName. "!";
            // redirecting
            header("Location: ../product/showProductsController.php?message=". $message);
            die;
        } else {
            // message to display
            $message = "Invalid email or password";
        }
    }
}
// main template to display
require_once '../../view/mainView.php';