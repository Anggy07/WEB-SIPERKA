<?php
session_start();

if (!isset($_SESSION['name'])){
    header("location:/");
}

require __DIR__ . '/../../vendor/autoload.php';

use App\Controller\UserController;

$main = new UserController();
$main->index();

if (isset($_POST['submit'])){
    $User = new UserController();
    $User->insert();
}