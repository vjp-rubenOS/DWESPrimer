<?php
require_once 'utils/utils.php';
require_once 'entities/file.class.php';
require_once 'entities/Partner.class.php';
require_once 'entities/repository/asociadoRepository.class.php';
require_once 'entities/connection.class.php';
require_once 'exceptions/appException.class.php';
require_once 'exceptions/FileException.class.php';

$errores=[];
$descripcion='';
$mensaje='';

try{
    $config=require_once'app/config.php';

    App::bind('config',$config);

    $partnerRepositorio= new AsociadoRepositorio();

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nombre = trim(htmlspecialchars($_POST['nombre']));
        $descripcion = trim(htmlspecialchars($_POST['descripcion']));
        $tiposAceptados = ['image/jpeg', 'image/jpg', 'image/gif', 'image/png'];

        $logo= new File('logo',$tiposAceptados);

        $logo->saveUploadFile(Partner::RUTA_LOGO);

        $partner = new Partner($nombre,$logo->getFileName(),$descripcion);
        $partnerRepositorio->save($partner);
        $mensaje='Imagen logo guardada';


    }




}catch(FileException $exception) {
    $errores[] = $exception->getMessage();
    //guardo en un array los errores
}
finally{
    $asociados =  $partnerRepositorio->findAll();
}



require_once 'views/partner.view.php';
?>