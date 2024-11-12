<?php

require "utils/utils.php";
require "entities/imagenGaleria.class.php";
require "entities/Partner.class.php";




$imagenes = [];

for ($i = 1; $i <= 12; $i++) {
  $imagenes[] = new ImagenGaleria($i . '.jpg', 'imagen' . $i, rand(0, 1000), rand(0, 1000), rand(0, 1000));
}



$contador = 1;
for ($i = 1; $i < 7; $i++) {
  $arrayPartners[] = new Partners('Asociado ' . $i, "images/index/log" . $contador   . ".jpg", " Descripcion" . $i);
  if ($contador  >= 3) {
    $ncontador   = 1;
  } else {
    $contador++;
  }
}




require_once "views/index.view.php";
?>
