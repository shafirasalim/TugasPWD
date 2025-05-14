<?php
class Koneksi{



    private $host="localhost";
    private $user = 'root';
    private $password = '';
    private $dbname = 'myblog';

    private $conn;

    public function __construct(){
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->dbname);

        if($this->conn->connect_error){
            die('tidak terhubung'.$this->conn->connect_error);
        }else{
            // echo 'terhubung ke database ';
        }
    }
    public function getConnection(){
        return $this->conn;
    }


}

// $koneksi = new Koneksi();