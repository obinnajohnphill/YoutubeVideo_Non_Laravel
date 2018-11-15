<?php
/**
 * Created by PhpStorm.
 * User: obinnajohnphill
 * Date: 14/11/18
 * Time: 19:30
 */


include dirname(__FILE__).'/../../vendor/autoload.php';

use Obinna\Controllers\YoutubeVideosController;

if (isset($_POST["searchterm"]) AND isset($_POST["number"]) )
{
    $searchItem =  htmlspecialchars($_POST["searchterm"]);

    $number = htmlspecialchars($_POST["number"]);

    $passer = new YoutubeVideosController($searchItem, $number);

    if (empty($searchItem) OR empty($number))
    {
        echo "Your've not added required search term";
        die();
    }
}



