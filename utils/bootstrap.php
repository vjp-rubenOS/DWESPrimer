<?php
require_once 'entities/app.class.php';

$config=require_once'app/config.php';

App::bind('config',$config);

?>