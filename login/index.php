<?php
/**
 * Created by PhpStorm.
 * User: anggy
 * Date: 12/14/2017
 * Time: 6:50 PM
 */


require __DIR__ . '/../vendor/autoload.php';
use App\Controller\LoginController;

session_start();
if (isset($_POST['submit'])){
    $main = new LoginController();
    $main ->login();
}
if (isset($_SESSION['name'])){
    header("location:../dashboard");
}

include __DIR__ . '/../app/View/login/login.php ';

