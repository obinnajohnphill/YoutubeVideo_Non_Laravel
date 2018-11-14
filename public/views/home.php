
<html>
<head>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>


</head>

<body>


<form>
<p>Message is: {{ message }}</p>
<input v-model="message" placeholder="search video">
<input type="checkbox" id="checkbox" v-model="checked">
<label for="checkbox">{{ checked }}</label>
</form>

<?php

/**
 * Created by PhpStorm.
 * User: obinnajohnphill
 * Date: 14/11/18
 * Time: 17:31
 */

include dirname(__FILE__).'/../../vendor/autoload.php';

//use Obinna\YoutubeVideosModel;
//use Obinna\Controllers\YoutubeVideosController;


//$user = new YoutubeVideosModel();
//$page = new YoutubeVideosController();

//$helloUser = $user->sayhello();
//$hellopage = $page->another();


?>


</body>
</html>

