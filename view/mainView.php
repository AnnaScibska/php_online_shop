<?php
// verifying if/who is logged
if (isset($_SESSION['user'])) {
    if (is_a($_SESSION['user'], 'App\Employee')) {
        $logged = "admin";
    } else if (is_a($_SESSION['user'], 'App\User')) {
        $logged = "user";
    }
} else {
    $logged = "";
}
?>

<!DOCTYPE html>
<html>
<head>
<!--    title passed by controller -->
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../../main.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-light">
            <ul class="nav">

<!--                different links available depending on who is logged -->
                <?php
                    // displayed "hello" message with a name of a user/admin
                    if ($logged != "") {
                        echo "<li class=\"nav-item\"><strong>Hello, ";
                        echo $_SESSION['user']->_user_FirstName;
                        echo "</strong></li>";
                    }
                ?>
                <li class="nav-item"><a class="nav-link" href="../../index.php">Home</a></li>
                <?php
                    // displayed only if admin logged etc.
                    if ($logged == "admin") {
                        echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"../../controller/product/addProductController.php\">Add Product</a></li>";
                    }
                ?>
                <li class="nav-item"><a class="nav-link" href="../../controller/product/showProductsController.php">Show Products</a></li>
                <?php
                    if ($logged == "admin") {
                        echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"../../controller/user/showUsersController.php\">Show Users</a></li>";
                    }
                ?>
                <?php
                if ($logged != "user") {
                    echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"../../controller/user/addUserController.php\">Register User</a></li>";
                }
                ?>
                <?php
                    if ($logged == "") {
                        echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"../../controller/login/loginController.php\">Sign in</a></li>";
                    }
                ?>
                <?php
                    if ($logged == "user") {
                        echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"../../controller/cart/showCartController.php\">Cart</a></li>";
                    }
                ?>
                <?php
                    if ($logged != "") {
                        echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"../../controller/login/logoutController.php\">Logout</a></li>";
                    }
                ?>
            </ul>
        </nav>
    </header>

<!--    title passed by controller -->
    <h1><?php echo $title ?></h1>
    <?php
        // message passed by GET (details in the controller)
        if ($message) {
            echo '<h3 class="message">';
            echo $message; $message = '';
            echo '</h3>';
        }
    ?>

<!--    detailed template -->
    <?php require_once ($pageToDisplay); ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>