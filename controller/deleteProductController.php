<?php

require_once '../Autoloader.php';
require_once '../database/deleteProductModel.php';

Autoloader::register();

$title = 'Delete Product';
$message = '';
$pageToDisplay = 'deleteProductView.php';

require_once '../view/mainView.php';