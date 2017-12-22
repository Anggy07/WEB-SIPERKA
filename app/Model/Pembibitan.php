<?php
namespace App\Model;

require __DIR__ . '/../../vendor/autoload.php';

use App\Config\Config;

class Pembibitan
{
    private $db;
    private $tabel = "bibit";

    public function __construct()
    {
        $this->db = new Config();
    }
    public function selectAll(){
        $query = "SELECT * FROM $this->tabel";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function select($id){
        $ini = $this->db->quote($id);
        $query = "SELECT * FROM $this->tabel WHERE id_pembibitan=$ini";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt;
    }

    public function delete($id){
        $query = "DELETE FROM $this->tabel WHERE id_pembibitan=$id";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function getNamaYangAda(){
        $query = "SELECT COUNT(nama_lahan) FROM bibit";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        while($hasil = $this->fetch($stmt)) {
            $data[] = $hasil[0];
                 }
        return $data;

    }
    public function update($tgl_pembibitan, $nama_tanaman, $nama_lahan, $status, $id){
        $tgl_pembibitan = $this->db->quote($tgl_pembibitan);
        $nama_tanaman= $this->db->quote($nama_tanaman);
        $nama_lahan = $this->db->quote($nama_lahan);
        $status = $this->db->quote($status);


        $query = "UPDATE $this->tabel SET tgl_pembibitan=$tgl_pembibitan, nama_tanaman=$nama_tanaman, nama_lahan=$nama_lahan, status=$status WHERE id_pembibitan=$id";
        $stmt = $this->db->prepare($query);

        $stmt->execute();
        return $stmt;

    }
    public function insert($tgl_pembibitan, $nama_tanaman, $nama_lahan, $status){
        $tgl_pembibitan = $this->db->quote($tgl_pembibitan);
        $nama_tanaman= $this->db->quote($nama_tanaman);
        $nama_lahan = $this->db->quote($nama_lahan);
        $status = $this->db->quote($status);


//        $id = $this->db->quote($id);
        $query = "INSERT INTO $this->tabel (tgl_pembibitan, nama_tanaman, nama_lahan, status)
                              VALUE ($tgl_pembibitan, $nama_tanaman, $nama_lahan, $status)";
        $stmt = $this->db->prepare($query);
//        var_dump($stmt);
//        exit;
        $stmt->execute();
        return $stmt;

    }

    public function fetch($var)
    {
        $stmt = $var->fetch();
        return $stmt;
    }
}