<?php
/**
 * Created by PhpStorm.
 * User: anggy
 * Date: 12/15/2017
 * Time: 12:36 PM
 */

namespace App\Controller;

require __DIR__ . '/../../vendor/autoload.php';

use App\Model\Lahan;
use App\Model\Pembibitan;
use App\Model\Tanaman;

class PembibitanController
{
    private $model;
    private $modelTanaman;
    private $modelLahan;

    public function __construct()
    {
        $this->model = new Pembibitan();
        $this->modelTanaman = new Tanaman();
        $this->modelLahan = new Lahan();
    }

    public function index(){
        $data = $this->model->selectAll();
        $tanaman = $this->modelTanaman->selectAll();
        $lahan = $this->modelLahan->selectAll();
        include __DIR__ . '/../../app/View/pembibitan/pembibitan.php';
    }
    public function viewEdit($id){
        $data = $this->model->select($id);
        $row = $this->model->fetch($data);
        $tanaman = $this->modelTanaman->selectAll();
        $lahan = $this->modelLahan->selectAll();
        if (count($row) == 1) {
            header("location:../");
        }else {
            include __DIR__ . '/../../app/View/pembibitan/editpembibitan.php';
        }
    }

    public function update()
    {
        $tgl_pembibitan = $_POST['tgl_pembibitan'];
        $nama_tanaman = $_POST['nama_tanaman'];
        $nama_lahan = $_POST['nama_lahan'];
        $status = $_POST['status'];

        $id = $_POST['id'];

        $update = $this->model->update($tgl_pembibitan, $nama_tanaman,  $nama_lahan, $status, $id);
        header("location:../");
    }
    public function delete($id){
        $delete = $this->model->delete($id);
        header("location:../pembibitan");
    }

    public function insert(){

       $yangada = $this->model->getNamaYangAda();
        $tgl_pembibitan = $_POST['tgl_pembibitan'];
        $nama_tanaman = $_POST['nama_tanaman'];
        $nama_lahan = $_POST['nama_lahan'];
        $status = "belum diproses";

        foreach ($yangada as $key) {
            if ($nama_lahan == $key ) {
                    var_dump(' tanaman tidak bisa lebih dari 3 dalam 1 lahan');
                    exit();
                }
            }

        $insert = $this->model->insert($tgl_pembibitan, $nama_tanaman,  $nama_lahan, $status);

        header("location:../pembibitan");
    }
}
?>