<?php 
include __DIR__.'exceptions/FileException.class.php'; 
class File{
    private $file;
    private $fileName;

    /**
     * File constructor
     * @param string $fileName
     * @param array $arrayTypes
     * @throws FileException
     */
    public function _construct(string $fileName, array $arrType){
        // con $fileName obtendremos el fichero mediante el array $_FILES que con
        //todos los ficheros que se suben al servidor mediante un formulario.
        $this->file=$_FILES[$fileName];
        $this->fileName='';

        //Comprobamos que es array contiene el fichero
        if(!isset($this->file)){
            //Mostrar un error
            throw new FileException('Debes seleccionar un fichero');
        }

        //verificamos si ha habido algun error durante la subida del fichero
       if($this->file['error'] !== UPLOAD_ERR_OK){
        //Dentro del if verificamos de que tipo ha sido el error
        switch($this->file['error']){
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:{
                //Algun problema con el tamaño del fichero(php.ini)
                throw new FileException('El fichero es demasiado grande');
                break;
            }
            case UPLOAD_ERR_PARTIAL:{
                //Error en la trasferencia -subida incompleta
                throw new FileException('No se ha podido subir el fichero completo');

                break;
            }
            default:{
                //Error en la subida del fichero
                throw new FileException('No se ha podido subir el fichero');
                break;
            }

        }
       }
       if(in_array($this->file['type'],$arrType)===false){
        throw new FileException('Tipo de fichero no soportado');
        //Error,tipo no soportado
        
       }
        
    }
    public function getFileName(){
        return $this->fileName;
    }
    
}


?>