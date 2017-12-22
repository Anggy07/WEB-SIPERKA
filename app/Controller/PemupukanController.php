<?php
/**
 * Created by PhpStorm.
 * User: anggy
 * Date: 12/15/2017
 * Time: 12:36 PM
 */

namespace App\Controller;

require __DIR__ . '/../../vendor/autoload.php';

use App\Model\Pemupukan;
use App\Model\Pembibitan;

class PemupukanController
{
    private $model;
    private  $modelPembibitan;

    public function __construct()
    {
        $this->model = new Pemupukan();
        $this->modelPembibitan = new Pembibitan();
    }

    public function index(){
        $data = $this->model->selectAll();
        $id_pembibitan = $this->modelPembibitan->selectAll();
        include __DIR__ . '/../../app/View/pemupukan/pemupukan.php';
    }
    public function viewEdit($id){
        $data = $this->model->select($id);
        $row = $this->model->fetch($data);
        $id_pembibitan = $this->modelPembibitan->selectAll();
        if (count($row) == 1) {
            header("location:../");
        }else {
            include __DIR__ . '/../../app/View/pemupukan/editpemupukan.php';
        }
    }

    public function update()
    {
//        var_dump($_POST);
//        exit;
        $id_pembibitan = $_POST['id_pembibitan'];
        $tgl_pemupukan = $_POST['tgl_pemupukan'];
        $nama_pupuk = $_POST['nama_pupuk'];
        $vol_pupuk = $_POST['vol_pupuk'];
        $status= $_POST['status'];

        $id = $_POST['id'];

//        if ($id % 2 == 1){
//            var_dump("idnya nggak boleh ganjil");
//            exit();
//        }

        $update = $this->model->update($id_pembibitan, $tgl_pemupukan, $nama_pupuk, $vol_pupuk, $status, $id);

        header("location:../");
    }
    public function delete($id){
        $delete = $this->model->delete($id);
        header("location:../pemupukan");
    }

    public function insert(){

        $id_pembibitan = $_POST['id_pembibitan'];
        $tgl_pemupukan = $_POST['tgl_pemupukan'];
        $nama_pupuk = $_POST['nama_pupuk'];
        $vol_pupuk = $_POST['vol_pupuk'];
        $status= "belum diproses";
//        var_dump($_POST);
//        exit;

        $insert = $this->model->insert($id_pembibitan, $tgl_pemupukan, $nama_pupuk, $vol_pupuk, $status);
        header("location:../pemupukan");
    }
}
?>