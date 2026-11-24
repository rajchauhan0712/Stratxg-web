<?php
class Database
{
    private $host;
    private $db_name;
    private $username;
    private $password;

    public function __construct()
    {
        $this->host = getenv('DB_HOST') ?: 'localhost';
        $this->db_name = getenv('DB_NAME') ?: '';
        $this->username = getenv('DB_USER') ?: '';
        $this->password = getenv('DB_PASSWORD') ?: '';
    }
    private $conn;

    public function check_con(){
        return "Check your connection";
    }

    public function connect(){
        $this->conn = null;
        try{
            $this->conn = mysqli_connect($this->host,$this->username,$this->password,$this->db_name);
        }catch (Exception $e){
            echo 'Connection Error: '.$e;
        }
        return $this->conn;
    }
}