<?php
session_start();

if (!isset($_SESSION['name'])){
    header("location:/");
}

require __DIR__ . '/../../vendor/autoload.php';

use App\Controller\KondisiController;

$main = new KondisiController();
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $main->delete($id);
}
?>