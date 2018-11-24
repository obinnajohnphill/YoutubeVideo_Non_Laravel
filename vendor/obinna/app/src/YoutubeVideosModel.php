<?php
/**
 * Created by PhpStorm.
 * User: obinnajohnphill
 * Date: 14/11/18
 * Time: 18:24
 */

namespace Obinna;

use Dotenv;

class YoutubeVideosModel
{
    protected $host;
    protected $user;
    protected $pass;
    protected $db;

    public function __construct(){
        $directory = chop($_SERVER["DOCUMENT_ROOT"],'public');
        $dotenv = new Dotenv\Dotenv($directory.'/');
        $dotenv->load();
        $this->host =  $_ENV['DB_HOST'];
        $this->user =  $_ENV['DB_USER'];
        $this->pass =  $_ENV['DB_PWD'];
        $this->db =  $_ENV['DB_NAME'];
     }

}