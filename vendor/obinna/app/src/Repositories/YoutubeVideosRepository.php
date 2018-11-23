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

    public function all(){

        $statement  = $this->conn->prepare("SELECT * FROM  videos");
        $statement ->execute();
        while ( $row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            $videoId[] = $row['video_id'];
            $title[] = $row['title'];
            $this->data = array("videoId"=>$videoId,"title"=>$title);
        }
        $this->close(); ## Close pdo-mysql connection

        return  $this->data;
    }

    public function saveAll($video_id,$title)
    {
        $payload = array();
        try {
            $statement = $this->conn->prepare("INSERT INTO videos (video_id, title) VALUES ('$video_id','$title')");
            $statement->execute();
        }
        catch(PDOException $e)
        {
            echo "Insert failed: " . $e->getMessage();
        }
        $this->close(); ## Close mysqli connection
        session_start();
        $payload ['msg'] = "Your video has been saved";
        $redirect = "../saved_videos?".http_build_query($payload);;
        header( "Location: $redirect" );
    }


    public function checkDuplicate($video_id,$title){
        $query  = "SELECT * FROM  videos WHERE video_id = '$video_id'";
        $result = mysqli_query($this->connect(), $query);
        if ($result->num_rows > 0) {
            $this->close();
            session_start();
            $data[] = $title;
            $payload ['msg'] = "Duplicate video exists in database";
            $payload ['title'] = $data;
            $redirect = "../?" . http_build_query($payload);;
            header("Location: $redirect");
        }else{
            $this->duplicate = true;
        }
        return $this->duplicate;
    }

    public function delete($video_id){
        $query  = "DELETE FROM videos WHERE video_id = '$video_id'";
        mysqli_query($this->connect(), $query);
        session_start();
        $payload ['delete-msg'] = "Videos deleted from database";
        $redirect = "../saved_videos?" . http_build_query($payload);;
        header("Location: $redirect");
    }

}