<?php

class DB{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function _construct(){
        $this->host = 'localhost';
        $this->db = 'login';
        $this->user = 'root';
        $this->password = "1234!\.QWE";
        $this->charset= "utf8mb4";
    }
    function connect(){
        try{
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES =>false,
            ];
            $pdo=new PDO($connection,$this->user,$this->password, $options)

            return $pdo;
        }catch(PDOException $e){
            print('Error connection:' . $e->getMessage());
        }
    }
}