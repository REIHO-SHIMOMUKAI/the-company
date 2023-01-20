<?php

class Database{
    private $server_name = "localhost";
    private $username = "root";
    private $password = "";
    private $db_names = "the_company";
    protected $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->server_name,$this->username,$this->password,$this->db_names);

        //check if connection has error
        if($this->conn->connect_error)
        {
            die('Unable to connect to he database: '.$this->conn->connect_error);
        }
    }
}