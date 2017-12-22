<?php
namespace App\Model;

require __DIR__ . '/../../vendor/autoload.php';

use App\Config\Config;

class Lahan
{
    private $db;
    private $tabel = "Lahan";

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
        $query = "SELECT * FROM $this->tabel WHERE id_lahan=$ini";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt;
    }

    public function delete($id){
        $query = "DELETE FROM $this->tabel WHERE id_lahan=$id";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function update($nama_lahan, $luas_lahan,$ph_tanah, $id){
        $nama_lahan = $this->db->quote($nama_lahan);
        $luas_lahan = $this->db->quote($luas_lahan);
        $ph_tanah = $this->db->quote($ph_tanah);


        $query = "UPDATE $this->tabel SET nama_lahan=$nama_lahan, luas_lahan=$luas_lahan, ph_tanah=$ph_tanah WHERE id_lahan=$id";
        $stmt = $this->db->prepare($query);

        $stmt->execute();
        return $stmt;

    }
    public function insert($nama_lahan, $luas_lahan,$ph_tanah){
        $nama_lahan = $this->db->quote($nama_lahan);
        $luas_lahan = $this->db->quote($luas_lahan);
        $ph_tanah = $this->db->quote($ph_tanah);


//        $id = $this->db->quote($id);
        $query = "INSERT INTO $this->tabel (nama_lahan, luas_lahan, ph_tanah)
                              VALUE ($nama_lahan, $luas_lahan, $ph_tanah)";
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