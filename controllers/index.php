<?php

require_once "utils/utils.php";
require_once "entities/imagenGaleria.class.php";
require_once "entities/Partner.class.php";
require_once "entities/repository/imagenGaleriaRepository.php";
require_once "entities/repository/asociadoRepository.class.php";



// array vacio donde almacenamos los objetos de tipo ImpagenGaleria 
$imagenes = [];



//Codigo antiguo donde creaba 12 objetos de imagenGaleria 
// for ($i = 1; $i <= 12; $i++) {
//     $imagenes[] = new ImagenGaleria(($i) . ".jpg", "Descripción imagen " . ($i),0, rand(0, 1000), rand(0, 1000), rand(0, 1000));
// }

try{

  //Pasos para hacer la conexion a la base de datos
  //Se guarda en una variable la configuracion desde un archivo de configuracion
  // $config=require_once'app/config.php';
  // //Se vincula la configuracion a la clase App
  // App::bind('config',$config);

  // Se instancian a las clases  repositorios para poder acceder a las tablas de imagenes y asociados
  $imagenRepositorio= new ImagenGaleriaRepositorio();
  $asociadoRepositorio= new AsociadoRepositorio();
}
//Captura de errores
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
    // Al Final, se recuperan los datos de las imágenes y los asociados, si no hubo errores
    // Con el finally se ejecuta lo siguiente haya o no excepciones 
    $imagenes = $imagenRepositorio->findAll();  // Recupera todas las imágenes de la galería desde la base de datos
    $arrayPartners = $asociadoRepositorio->findAll();  // Recupera todos partners desde la base de datos
  
  

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
