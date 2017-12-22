<?php
/**
 * Created by PhpStorm.
 * User: anggy
 * Date: 12/14/2017
 * Time: 6:21 PM
 */

namespace App\Controller;

require __DIR__ . '/../../vendor/autoload.php';

use App\Model\Login;
use App\Controller\DashboardController;

class LoginController
{
    private $model;
    public function __construct()
    {
        $this->model = new Login();
    }
    public function login(){
        $dashboard = new DashboardController();
        if (empty($_POST['username']) || empty($_POST['password'])){
            header("location:?error=1");
        } else {
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $data = $this->model->getUser($username, $password);
            $row = $this->model->fetch($data);

            if (count($row) == 1){
                header("location:?error=2");
            } else {
                $level = $row[6];
                $nama = $row[1];
                $_SESSION['name'] = $nama;
                $_SESSION['level'] = $level;
                $dashboard->show();
            }
        }
    }
}