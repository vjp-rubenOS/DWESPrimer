<?php
require 'utils/utils.php';
require 'entities/File.class.php'; // me esta dando problemas aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa

// require'exceptions7FileException.class.php':
//array para guardar los mensajes de los errores

$errores =[];
$descripcion = '';
$mensaje='';
if($_SERVER['REQUEST_METHOD']==='POST'){
    try{
        $descripcion= trim(htmlspecialchars($_POST['descripcion']));
    $tiposAceptados=['image/jpeg','image/jpg','image/gif','image/png'];
    $imagen = new File('imagen',$tiposAceptados);
    //el parametro fileName es 'imagen' porque asi lo indicamos en
    //en el formulario (type='file' name='imagen')
    $mensaje = 'Datos enviados';

    }
    catch(FileException $exception){
        $errores[]=$exception->getMessage();
    }
    

}



require 'views/gallery.view.php';
?>