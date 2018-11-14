<?php
/**
 * Created by PhpStorm.
 * User: obinnajohnphill
 * Date: 14/11/18
 * Time: 17:31
 */


include dirname(__FILE__).'/../../vendor/autoload.php';

use Obinna\YoutubeVideosModel;
use Obinna\Controllers\YoutubeVideosController;


$user = new YoutubeVideosModel();
$page = new YoutubeVideosController();

$helloUser = $user->sayhello();
$hellopage = $page->another();

echo $helloUser;
echo $hellopage;