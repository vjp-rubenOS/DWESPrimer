<?php
require_once 'entities/app.class.php';
require_once 'entities/request.class.php';
require_once 'entities/router.class.php';

$config=require_once'app/config.php';

App::bind('config',$config);

?>