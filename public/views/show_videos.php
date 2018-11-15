

<!doctype html>
<html>
<head>
    <title>YouTube Search</title>
</head>

<?php
include dirname(__FILE__).'/../../vendor/autoload.php';

use Obinna\Controllers\YoutubeVideosController;


$videos = new YoutubeVideosController();
$list = $videos->processRequest();

for ($i = 0; $i < $this->number; $i++) {
    $videoId = $value ['items'][$i]['id']['videoId'];
    $title = $value ['items'][$i]['snippet']['title'];
    $description = $value ['items'][$i]['snippet']['description'];
}

?>

<body>

</body>
</html>