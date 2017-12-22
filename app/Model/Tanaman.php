<?php
namespace App\Model;

require __DIR__ . '/../../vendor/autoload.php';

use App\Config\Config;

class Tanaman
{
    private $db;
    private $tabel = "Tanaman";

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
        $query = "SELECT * FROM $this->tabel WHERE id_tanaman=$ini";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt;
    }

    public function delete($id){
        $query = "DELETE FROM $this->tabel WHERE id_tanaman=$id";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function update($nama_tanaman, $jenis_tanaman, $periode_tanaman, $id){
        $nama_tanaman = $this->db->quote($nama_tanaman);
        $jenis_tanaman = $this->db->quote($jenis_tanaman);
        $periode_tanaman = $this->db->quote($periode_tanaman);


        $query = "UPDATE $this->tabel SET nama_tanaman=$nama_tanaman, jenis_tanaman=$jenis_tanaman, periode_tanaman=$periode_tanaman WHERE id_tanaman=$id";
        $stmt = $this->db->prepare($query);

        $stmt->execute();
        return $stmt;

    }
    public function insert($nama_tanaman, $jenis_tanaman, $periode_tanaman){
        $nama_tanaman = $this->db->quote($nama_tanaman);
        $jenis_tanaman = $this->db->quote($jenis_tanaman);
        $periode_tanaman = $this->db->quote($periode_tanaman);


//        $id = $this->db->quote($id);
        $query = "INSERT INTO $this->tabel (nama_tanaman, jenis_tanaman, periode_tanaman)
                              VALUE ($nama_tanaman, $jenis_tanaman, $periode_tanaman)";
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