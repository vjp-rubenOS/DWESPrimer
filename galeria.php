<?php
require 'utils/utils.php';

$errores =[];
$descripcion = '';
$mensaje='';
if($_SERVER['REQUEST_METHOD']==='POST'){
    $descripcion= trim(htmlspecialchars($_POST['descripcion']));
    $mensaje = 'Datos enviados';

}

require 'views/gallery.view.php';
?>