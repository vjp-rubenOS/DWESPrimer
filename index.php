<?php 
require_once 'utils/bootstrap.php';

$routes= require 'utils/routes.php';
$uri=trim($_SERVER['REQUEST_URI'],'/');
require $routes[$uri];

?>