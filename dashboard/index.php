<?php
/**
 * Created by PhpStorm.
 * User: anggy
 * Date: 12/14/2017
 * Time: 6:48 PM
 */
require __DIR__ . '/../vendor/autoload.php';
session_start();

if (!isset($_SESSION['name'])){
    header("location:../");
}

require __DIR__ . '/../app/View/admin/adminAwal.php';
?>