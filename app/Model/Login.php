<?php
namespace App\Model;

require __DIR__ . '/../../vendor/autoload.php';

use App\Config\Config;

class Login
{
    private $db;
    private $tabel = "login";

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
        $query = "SELECT * FROM $this->tabel WHERE id_user=$ini";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt;
    }
    public function getUser($username, $password){
        $query = "SELECT * FROM $this->tabel WHERE username=:username AND password=:password";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        return $stmt;
    }

    public function delete($id){
        $query = "DELETE FROM $this->tabel WHERE id_user=$id";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function update($NamaLengkap, $TempatLahir, $TanggalLahir, $Alamat, $Jabatan, $Username, $NomorTelepone, $Email, $id){
        $NamaLengkap = $this->db->quote($NamaLengkap);
        $TempatLahir = $this->db->quote($TempatLahir);
        $TanggalLahir = $this->db->quote($TanggalLahir);
        $Alamat = $this->db->quote($Alamat);
        $Jabatan = $this->db->quote($Jabatan);
        $Username = $this->db->quote($Username);
//      $Password = $this->db->quote($Password);
        $NomorTelepone = $this->db->quote($NomorTelepone);
        $Email = $this->db->quote($Email);

        $query = "UPDATE $this->tabel SET nama_lengkap=$NamaLengkap, tempat_lahir=$TempatLahir, tgl_lahir=$TanggalLahir, alamat=$Alamat, jabatan=$Jabatan, username=$Username, no_tlp=$NomorTelepone, email=$Email WHERE id_user=$id";
        $stmt = $this->db->prepare($query);

        $stmt->execute();
        return $stmt;

    }
    public function insert($NamaLengkap, $TempatLahir, $TanggalLahir, $Alamat, $Jabatan, $Username, $Password, $NomorTelepone, $Email){
        $NamaLengkap = $this->db->quote($NamaLengkap);
        $TempatLahir = $this->db->quote($TempatLahir);
        $TanggalLahir = $this->db->quote($TanggalLahir);
        $Alamat = $this->db->quote($Alamat);
        $Jabatan = $this->db->quote($Jabatan);
        $Username = $this->db->quote($Username);
        $Password = $this->db->quote($Password);
        $NomorTelepone = $this->db->quote($NomorTelepone);
        $Email = $this->db->quote($Email);
//        $id = $this->db->quote($id);
        $query = "INSERT INTO $this->tabel (nama_lengkap, tempat_lahir, tgl_lahir, alamat, jabatan, username, password, no_tlp, Email)
                              VALUE ($NamaLengkap, $TempatLahir, $TanggalLahir, $Alamat, $Jabatan, $Username, $Password, $NomorTelepone, $Email)";
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