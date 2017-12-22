<?php
namespace App\Model;

require __DIR__ . '/../../vendor/autoload.php';

use App\Config\Config;

class Pemupukan
{
    private $db;
    private $tabel = "pupuk";

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
        $query = "SELECT * FROM $this->tabel WHERE id_pemupukan=$ini";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt;
    }

    public function delete($id){
        $query = "DELETE FROM $this->tabel WHERE id_pemupukan=$id";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function update($id_pembibitan, $tgl_pemupukan, $nama_pupuk, $vol_pupuk, $status, $id){
//        var_dump($id_pembibitan.' '.$tgl_pemupukan.' '.$nama_pupuk.' '.$vol_pupuk.' '.$status.' '.$id);
//        exit;
        $id_pembibitan = $this->db->quote($id_pembibitan);
        $tgl_pemupukan = $this->db->quote($tgl_pemupukan);
        $nama_pupuk= $this->db->quote($nama_pupuk);
        $vol_pupuk = $this->db->quote($vol_pupuk);
        $status = $this->db->quote($status);


        $query = "UPDATE $this->tabel SET id_pembibitan=$id_pembibitan, tgl_pemupukan=$tgl_pemupukan, nama_pupuk=$nama_pupuk, vol_pupuk=$vol_pupuk, status=$status WHERE id_pemupukan=$id";
        $stmt = $this->db->prepare($query);

        $stmt->execute();
        return $stmt;

    }
    public function insert($id_pembibitan, $tgl_pemupukan, $nama_pupuk, $vol_pupuk, $status){
        $id_pembibitan = $this->db->quote($id_pembibitan);
        $tgl_pemupukan = $this->db->quote($tgl_pemupukan);
        $nama_pupuk= $this->db->quote($nama_pupuk);
        $vol_pupuk = $this->db->quote($vol_pupuk);
        $status = $this->db->quote($status);

//        $id = $this->db->quote($id);
        $query = "INSERT INTO $this->tabel (id_pembibitan, tgl_pemupukan, nama_pupuk, vol_pupuk, status)
                              VALUE ($id_pembibitan, $tgl_pemupukan, $nama_pupuk, $vol_pupuk, $status)";
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