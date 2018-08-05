<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-light">
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="../../index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="../../controller/product/addProductController.php">Add Product</a></li>
                <li class="nav-item"><a class="nav-link" href="../../controller/product/showProductsController.php">Show Products</a></li>
                <li class="nav-item"><a class="nav-link" href="../../controller/user/addUserController.php">Register</a></li>
                <li class="nav-item"><a class="nav-link" href="../../controller/user/showUsersController.php">Show Users</a></li>
                <li class="nav-item"><a class="nav-link" href="../../controller/login/logoutController.php">Logout</a></li>
                <li class="nav-item"><a class="nav-link" href="../../controller/login/loginController.php">Sign in</a></li>
            </ul>
        </nav>
    </header>

    <h1><?php echo $title ?></h1>
    <h3><?php if (isset($_SESSION['message'])) {echo $_SESSION['message'];} ?></h3>

    <?php require_once ($pageToDisplay); ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>