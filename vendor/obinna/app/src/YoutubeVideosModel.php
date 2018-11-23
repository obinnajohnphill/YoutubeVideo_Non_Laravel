<?php

namespace Obinna;
use PDO;
use PDOException;

class YoutubeVideosModel {

    public $host = "192.168.10.10";
    public $user = "homestead";
    public $pass = "secret";
    public $db = "youtube_video";
    public $conn;

    function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->host ;dbname=$this->db", $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }

        return $this->conn;

    }

    function connect() {
        $con = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if (!$con) {
            die('Could not connect to database!');
        }else {
            $this->conn = $con;
        }
        return $this->conn;
    }

    function close() {
       return  $this->conn = null;
    }
}