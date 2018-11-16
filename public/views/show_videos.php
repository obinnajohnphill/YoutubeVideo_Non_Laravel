
<!doctype html>
<html>
<head>
    <title>YouTube Search</title>


    <style>

        body {
            font-family: Arial;
            width: 100%;
            padding: 10px;
        }

        iframe {
            border: 0px;
        }
        .video-tile {
            display: inline-block;
            margin: 10px 10px 20px 10px;
        }

        .videoDiv {
            width: 250px;
            height: 150px;
            display: inline-block;
        }
        .videoTitle {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }

        .videoDesc {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }
        .videoInfo {
            width: 250px;
        }
    </style>

</head>

<?php

session_start();
if(isset($_SESSION['videos']) && isset($_GET['number'])) {
    for ($i = 0; $i < $_GET['number']; $i++) {
        if (!empty($_SESSION['videos']['items'][$i]['id']['videoId'])){
            $videoId = $_SESSION['videos']['items'][$i]['id']['videoId'];
            $title = $_SESSION['videos'] ['items'][$i]['snippet']['title'];
            $description = $_SESSION['videos']['items'][$i]['snippet']['description'];

        ?>

        <div class="video-tile">
            <div class="videoDiv">
                <iframe id="iframe" style="width:100%;height:100%" src="//www.youtube.com/embed/<?php echo $videoId; ?>"
                        data-autoplay-src="//www.youtube.com/embed/<?php echo $videoId; ?>?autoplay=1"></iframe>
            </div>
            <div class="videoInfo">
                <div class="videoTitle"><b><?php echo $title; ?></b></div>
                <div class="videoDesc"><?php echo $description; ?></div>
            </div>
        </div>
        <?php
        }
    }
}
?>

<body>

</body>
</html>