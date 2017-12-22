<?php
/**
 * Created by PhpStorm.
 * User: anggy
 * Date: 12/15/2017
 * Time: 12:36 PM
 */

namespace App\Controller;

require __DIR__ . '/../../vendor/autoload.php';

use App\Model\Tanaman;

class TanamanController
{
    private $model;

    public function __construct()
    {
        $this->model = new Tanaman();
    }

    public function index(){
        $data = $this->model->selectAll();
        include __DIR__ . '/../../app/View/tanaman/tanaman.php';
    }
    public function viewEdit($id){
        $data = $this->model->select($id);
        $row = $this->model->fetch($data);
        if (count($row) == 1) {
            header("location:../");
        }else {
            include __DIR__ . '/../../app/View/tanaman/edittanaman.php';
        }
    }

    public function update()
    {
        $nama_tanaman = $_POST['nama_tanaman'];
        $jenis_tanaman = $_POST['jenis_tanaman'];
        $periode_tanaman = $_POST['periode_tanaman'];

        $id = $_POST['id'];

        $update = $this->model->update($nama_tanaman, $jenis_tanaman, $periode_tanaman, $id);
        header("location:../");
    }
    public function delete($id){
        $delete = $this->model->delete($id);
        header("location:../tanaman");
    }

    public function insert(){
        $nama_tanaman = $_POST['nama_tanaman'];
        $jenis_tanaman = $_POST['jenis_tanaman'];
        $periode_tanaman = $_POST['periode_tanaman'];

        $insert = $this->model->insert($nama_tanaman, $jenis_tanaman, $periode_tanaman);
        header("location:../tanaman");
    }
}
?>