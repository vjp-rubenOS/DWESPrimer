<?php
require 'utils/utils.php'; // utils antes que view
require 'entities/ImagenGaleria.class.php';
require 'entities/ImagenGaleria.class.php';

$imagenes=[];

for($i=0;$i<=12;$i++){
    $imagenGaleria= new ImagenGaleria($i.'.jpg','imagen'.$i,rand(0,1000),rand(0,1000),rand(0,1000));
    $imagenes[]=$imagenGaleria;

   
}
require 'views/index.view.php';

?>