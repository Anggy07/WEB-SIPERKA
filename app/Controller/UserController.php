<?php
/**
 * Created by PhpStorm.
 * User: anggy
 * Date: 12/15/2017
 * Time: 12:36 PM
 */

namespace App\Controller;

require __DIR__ . '/../../vendor/autoload.php';

use App\Model\Login;

class UserController
{
    private $model;

    public function __construct()
    {
        $this->model = new Login();
    }

    public function index(){
        $data = $this->model->selectAll();
        include __DIR__ . '/../../app/View/register/daftar.php';
    }
    public function viewEdit($id){
        $data = $this->model->select($id);
        $row = $this->model->fetch($data);
        if (count($row) == 1) {
            header("location:../");
        }else {
            include __DIR__ . '/../../app/View/register/editUser.php';
        }
    }

public function update()
{
    $NamaLengkap = $_POST['nama_lengkap'];
    $Tempatlahir = $_POST['tempat_lahir'];
    $TanggalLahir = $_POST['tgl_lahir'];
    $Alamat = $_POST['alamat'];
    $Jabatan = $_POST['jabatan'];
    $Username = $_POST['username'];
//    $Password = md5($_POST['password']);
    $NomorTelepone = $_POST['no_tlp'];
    $Email = $_POST['email'];
    $id = $_POST['id'];

    $update = $this->model->update($NamaLengkap, $Tempatlahir, $TanggalLahir, $Alamat, $Jabatan, $Username, $NomorTelepone, $Email, $id);
    header("location:../");
}
public function delete($id){
    $delete = $this->model->delete($id);
    header("location:../daftar");
}

public function insert(){
    $NamaLengkap = $_POST['nama_lengkap'];
    $Tempatlahir = $_POST['tempat_lahir'];
    $TanggalLahir = $_POST['tgl_lahir'];
    $Alamat = $_POST['alamat'];
    $Jabatan = $_POST['jabatan'];
    $Username = $_POST['username'];
    $Password = md5($_POST['password']);
    $NomorTelepone = $_POST['no_tlp'];
    $Email = $_POST['email'];

    $insert = $this->model->insert($NamaLengkap, $Tempatlahir, $TanggalLahir, $Alamat, $Jabatan, $Username, $Password, $NomorTelepone, $Email);
    header("location:../daftar");
}
}
?>