<?php
/**
 * Created by PhpStorm.
 * User: anggy
 * Date: 12/15/2017
 * Time: 12:36 PM
 */

namespace App\Controller;

require __DIR__ . '/../../vendor/autoload.php';

use App\Model\Kondisi;
use App\Model\Pembibitan;

class KondisiController
{
    private $model;
    private  $modelPembibitan;

    public function __construct()
    {
        $this->model = new Kondisi();
        $this->modelPembibitan = new Pembibitan();
    }

    public function index(){
        $data = $this->model->selectAll();
        $id_pembibitan = $this->modelPembibitan->selectAll();
        include __DIR__ . '/../../app/View/kondisi/kondisi.php';
    }
    public function viewEdit($id){
        $data = $this->model->select($id);
        $row = $this->model->fetch($data);
        $id_pembibitan = $this->modelPembibitan->selectAll();
        if (count($row) == 1) {
            header("location:../");
        }else {
            include __DIR__ . '/../../app/View/kondisi/editkondisi.php';
        }
    }

    public function update()
    {
        $id_pembibitan = $_POST['id_pembibitan'];
        $kondisi_pohon = $_POST['kondisi_pohon'];
        $kondisi_bunga = $_POST['kondisi_bunga'];
        $kondisi_buah = $_POST['kondisi_buah'];

        $id = $_POST['id'];

        $update = $this->model->update($id_pembibitan, $kondisi_pohon, $kondisi_bunga, $kondisi_buah, $id);
        header("location:../");
    }
    public function delete($id){
        $delete = $this->model->delete($id);
        header("location:../kondisi");
    }

    public function insert(){

        $id_pembibitan = $_POST['id_pembibitan'];
        $kondisi_pohon = $_POST['kondisi_pohon'];
        $kondisi_bunga = $_POST['kondisi_bunga'];
        $kondisi_buah = $_POST['kondisi_buah'];

        $insert = $this->model->insert($id_pembibitan, $kondisi_pohon, $kondisi_bunga, $kondisi_buah);
        header("location:../kondisi");
    }
}
?>