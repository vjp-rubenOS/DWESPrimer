<?php

require_once "utils/utils.php";
require_once "entities/imagenGaleria.class.php";
require_once "entities/Partner.class.php";
require_once "entities/connection.class.php";
require_once "entities/repository/imagenGaleriaRepository.php";
require_once "entities/repository/asociadoRepository.class.php";




$imagenes = [];


// for ($i = 1; $i <= 12; $i++) {
//     $imagenes[] = new ImagenGaleria(($i) . ".jpg", "Descripción imagen " . ($i),0, rand(0, 1000), rand(0, 1000), rand(0, 1000));
// }

try{
  $config=require_once'app/config.php';

  App::bind('config',$config);

  $imagenRepositorio= new ImagenGaleriaRepositorio();
  $asociadoRepositorio= new AsociadoRepositorio();
}
catch (FileException $exception) {
  $errores[] = $exception->getMessage();
  //guardo en un array los errores
}catch (QueryException $exception) {
  $errores[] = $exception->getMessage();
}catch(AppException $exception){
  $errores[] = $exception->getMessage();

}catch(PDOException $exception){
  $errores[] = $exception->getMessage();

}
finally{
  
      $imagenes = $imagenRepositorio->findAll();
      $arrayPartners=$asociadoRepositorio->findAll();
     

  
  

}



//$contador = 1;
//for ($i = 1; $i < 7; $i++) {
//  $arrayPartners[] = new Partner('Asociado ' . $i, "images/index/log" . $contador   . ".jpg", " Descripcion" . $i);
//  if ($contador  >= 3) {
//    $ncontador   = 1;
//  } else {
//    $contador++;
//  }
//}




require_once "views/index.view.php";
?>
