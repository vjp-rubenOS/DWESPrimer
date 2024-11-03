<?php
require_once 'utils/utils.php';
require_once 'entities/file.class.php';
require_once 'entities/imagenGaleria.class.php';
require_once 'exceptions/FileException.class.php';
//array para guardar los mensajes de los errores

$errores = [];
$descripcion = '';
$mensaje = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $descripcion = trim(htmlspecialchars($_POST['descripcion']));
        $tiposAceptados = ['image/jpeg', 'image/jpg', 'image/gif', 'image/png'];
        //tipologia MIME 'tipodearchivo/extension'
        $imagen = new File('imagen', $tiposAceptados);
        //el parametro fileName es 'imagen' porque asi lo indicamos en
        //en el formulario (type='file' name='imagen')
        $imagen->saveUploadFile(imagenGaleria::RUTA_IMAGENES_GALLERY);
        $imagen->copyFile(imagenGaleria::RUTA_IMAGENES_GALLERY,imagenGaleria::RUTA_IMAGENES_PORTFOLIO);
        $mensaje = 'Datos enviados';
    } catch (FileException $exception) {
        $errores[] = $exception->getMessage();
        //guardo en un array los errores
    }
}



require 'views/gallery.view.php';
?>