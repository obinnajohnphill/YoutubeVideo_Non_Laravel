<?php
/**
 * Created by PhpStorm.
 * User: obinnajohnphill
 * Date: 14/11/18
 * Time: 18:22
 */

namespace Obinna\Repositories;

use PDO;
use PDOException;
use Obinna\YoutubeVideosModel;

class YoutubeVideosRepository extends YoutubeVideosModel
{

    public $data;
    public $duplicate;
    public $conn;

    public function __construct()
    {
        $this->conn = new PDO("mysql:host=$this->host ;dbname=$this->db", $this->user, $this->pass);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function all(){
        try{
            $statement  = $this->conn->prepare("SELECT * FROM  videos");
            $statement ->execute();
            while ( $row = $statement->fetch(PDO::FETCH_ASSOC))
            {
                $videoId[] = $row['video_id'];
                $title[] = $row['title'];
                $this->data = array("videoId"=>$videoId,"title"=>$title);
            }
            return  $this->data;
        }
        catch(PDOException $e)
        {
        echo "Select all failed: " . $e->getMessage();
        }
    }

    public function saveAll($video_id,$title)
    {
        $payload = array();
        try {
            $statement = $this->conn->prepare("INSERT INTO videos (video_id, title) VALUES ('$video_id','$title')");
            $statement->execute();
            $statement = null;
        }
        catch(PDOException $e)
        {
            echo "Insert failed: " . $e->getMessage();
        }
        session_start();
        $payload ['msg'] = "Your video has been saved";
        $redirect = "../saved_videos?".http_build_query($payload);;
        header( "Location: $redirect" );
    }


    public function checkDuplicate($video_id,$title){
        try {
            $statement = $this->conn->prepare("SELECT * FROM  videos WHERE video_id = '$video_id'");
            $statement->execute();
            $number_of_rows = $statement->fetchColumn();
            if ($number_of_rows > 0) {
                session_start();
                $data[] = $title;
                $payload ['msg'] = "Duplicate video exists in database";
                $payload ['title'] = $data;
                $redirect = "../?" . http_build_query($payload);;
                header("Location: $redirect");
            } else {
                $this->duplicate = true;
            }
            return $this->duplicate;
        }
        catch(PDOException $e)
        {
            echo "Check num-rows failed: " . $e->getMessage();
        }
    }


    public function delete($video_id){
        try{
            $statement = $this->conn->prepare("DELETE FROM videos WHERE video_id = '$video_id'");
            $statement->execute();
        }
        catch(PDOException $e)
        {
        echo "Delete failed: " . $e->getMessage();
        }
        session_start();
        $payload ['delete-msg'] = "Videos deleted from database";
        $redirect = "../saved_videos?" . http_build_query($payload);;
        header("Location: $redirect");
    }

}