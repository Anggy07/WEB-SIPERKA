<?php
session_start();

if (!isset($_SESSION['name'])){
    header("location:/");
}

require __DIR__ . '/../../vendor/autoload.php';

use App\Controller\TanamanController;

if (isset($_POST['submit'])){
    $User = new TanamanController();
    $User->insert();
}
?>