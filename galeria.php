<?php
require 'utils/utils.php';
require 'entities/file.class.php'; // me esta dando problemas aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
require 'entities/imagenGaleria.class.php';
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
    $imagen->saveUploadFile(imagenGaleria::RUTA_IMAGENES_GALLERY);
    $mensaje = 'Datos enviados';

    }
    catch(FileException $exception){
        $errores[]=$exception->getMessage();
    }
    

}



require 'views/gallery.view.php';
?>