<?php
namespace App\Model;

require __DIR__ . '/../../vendor/autoload.php';

use App\Config\Config;

class Kondisi
{
    private $db;
    private $tabel = "Kondisi";

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
        $query = "SELECT * FROM $this->tabel WHERE id_kondisi=$ini";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt;
    }

    public function delete($id){
        $query = "DELETE FROM $this->tabel WHERE id_kondisi=$id";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function update($id_pembibitan, $kondisi_pohon, $kondisi_bunga, $kondisi_buah, $id){
        $id_pembibitan = $this->db->quote($id_pembibitan);
        $kondisi_pohon = $this->db->quote($kondisi_pohon);
        $kondisi_bunga = $this->db->quote($kondisi_bunga);
        $kondisi_buah = $this->db->quote($kondisi_buah);


        $query = "UPDATE $this->tabel SET id_pembibitan=$id_pembibitan, kondisi_pohon=$kondisi_pohon, kondisi_bunga=$kondisi_bunga, kondisi_buah=$kondisi_buah WHERE id_kondisi=$id";
        $stmt = $this->db->prepare($query);

        $stmt->execute();
        return $stmt;

    }
    public function insert($id_pembibitan, $kondisi_pohon, $kondisi_bunga, $kondisi_buah){
        $id_pembibitan = $this->db->quote($id_pembibitan);
        $kondisi_pohon = $this->db->quote($kondisi_pohon);
        $kondisi_bunga = $this->db->quote($kondisi_bunga);
        $kondisi_buah = $this->db->quote($kondisi_buah);

//        $id = $this->db->quote($id);
        $query = "INSERT INTO $this->tabel (id_pembibitan, kondisi_pohon, kondisi_bunga, kondisi_buah)
                              VALUE ($id_pembibitan, $kondisi_pohon, $kondisi_bunga, $kondisi_buah)";
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