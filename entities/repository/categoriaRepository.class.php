<?php
require_once 'entities/QueryBuilder.class.php';
require_once 'entities/categoria.class.php';

class CategoriaRepositorio extends QueryBuilder{
    public function __construct(string $table='categorias',string $classEntity='Categoria')
    {
        parent::__construct($table,$classEntity);
        
    }
}

?>