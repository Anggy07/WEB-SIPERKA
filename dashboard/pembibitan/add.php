<?php
session_start();

if (!isset($_SESSION['name'])){
    header("location:/");
}

require __DIR__ . '/../../vendor/autoload.php';

use App\Controller\PembibitanController;

if (isset($_POST['submit'])){
    $User = new PembibitanController();
    $User->insert();
}
?>