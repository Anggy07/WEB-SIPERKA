<?php
session_start();

if (!isset($_SESSION['name'])){
    header("location:/");
}

require __DIR__ . '/../../vendor/autoload.php';

use App\Controller\LahanController;

$main = new LahanController();
$main->index();

if (isset($_POST['submit'])){
    $User = new LahanController();
    $User->insert();
}