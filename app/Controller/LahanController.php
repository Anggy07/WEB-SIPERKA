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

class LahanController
{
    private $model;

    public function __construct()
    {
        $this->model = new Lahan();
    }

    public function index(){
        $data = $this->model->selectAll();
        include __DIR__ . '/../../app/View/lahan/lahan.php';
    }
    public function viewEdit($id){
        $data = $this->model->select($id);
        $row = $this->model->fetch($data);
        if (count($row) == 1) {
            header("location:../");
        }else {
            include __DIR__ . '/../../app/View/lahan/editlahan.php';
        }
    }

    public function update()
    {
        $nama_lahan = $_POST['nama_lahan'];
        $luas_lahan = $_POST['luas_lahan'];
        $ph_tanah = $_POST['ph_tanah'];

        $id = $_POST['id'];

        $update = $this->model->update($nama_lahan, $luas_lahan, $ph_tanah, $id);
        header("location:../");
    }
    public function delete($id){
        $delete = $this->model->delete($id);
        header("location:../lahan");
    }

    public function insert(){
        $nama_lahan = $_POST['nama_lahan'];
        $luas_lahan = $_POST['luas_lahan'];
        $ph_tanah = $_POST['ph_tanah'];


        $insert = $this->model->insert($nama_lahan, $luas_lahan, $ph_tanah);

        header("location:../lahan");
    }
}
?>