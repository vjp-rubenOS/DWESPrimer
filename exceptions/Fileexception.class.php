<?php 
//Controla la excepcion File
class FileException extends Exception{
    /**
         * @param $mensaje 
         */
    public function __construct(string $mensaje){
        parent::__construct($mensaje);
    }
    
}

?>