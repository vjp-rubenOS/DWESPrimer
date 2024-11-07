<?php
require_once 'entities/QueryBuilder.class.php';

class ImagenGaleriaRepositorio extends QueryBuilder{
    public function __construct(string $table='imagenes',string $classEntity='imagenGaleria')
    {
        parent::__construct($table,$classEntity);
        
    }
}

?>