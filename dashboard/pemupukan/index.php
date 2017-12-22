<?php
session_start();

if (!isset($_SESSION['name'])){
    header("location:/");
}

require __DIR__ . '/../../vendor/autoload.php';

use App\Controller\PemupukanController;

$main = new PemupukanController();
$main->index();

if (isset($_POST['submit'])){
    $User = new PemupukanController();
    $User->insert();
}