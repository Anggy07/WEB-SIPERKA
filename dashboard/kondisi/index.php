<?php
session_start();

if (!isset($_SESSION['name'])){
    header("location:/");
}

require __DIR__ . '/../../vendor/autoload.php';

use App\Controller\KondisiController;

$main = new KondisiController();
$main->index();

if (isset($_POST['submit'])){
    $User = new KondisiController();
    $User->insert();
}