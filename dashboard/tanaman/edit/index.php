<?php
session_start();

if (!isset($_SESSION['name'])){
    header("location:/");
}

require __DIR__ . '/../../../vendor/autoload.php';

use App\Controller\TanamanController;

$main = new TanamanController();

if (isset($_GET['id']) && isset($_POST['submit'])){
    $User = new TanamanController();
    $User->update();
} elseif (isset($_GET['id'])){
    $id = $_GET['id'];
    $main->viewEdit($id);
}else{
    header("location:../");
}

?>