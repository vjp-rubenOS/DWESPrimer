<?php

require "utils/utils.php";
require "entities/imagenGaleria.class.php";


$imagenes = [];

  for ($i = 1; $i <= 12; $i++) {
    $imagenes[] = new ImagenGaleria($i . '.jpg', 'imagen' . $i, rand(0, 1000), rand(0, 1000), rand(0, 1000));
}



require "views/index.view.php";