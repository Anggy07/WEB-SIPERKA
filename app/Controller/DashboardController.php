<?php
/**
 * Created by PhpStorm.
 * User: anggy
 * Date: 12/14/2017
 * Time: 6:40 PM
 */

namespace App\Controller;

require __DIR__ . '/../../vendor/autoload.php';

class DashboardController
{
    public function show(){
        header("location:dashboard");
    }
}