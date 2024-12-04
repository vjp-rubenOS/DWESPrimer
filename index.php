<?php 

require_once 'utils/bootstrap.php';

//$router= new Router();

//$routes= require 'utils/routes.php';
//$uri=trim($_SERVER['REQUEST_URI'],'/'); quitado y ponemos lo de dentro de routes[]


try{
    require Router::load('utils/routes.php')-> direct(Request::uri(),Request::method());

}catch(Exception $e){
    die($e->getMessage());


}

?>