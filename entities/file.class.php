<?php 
include_once 'exceptions/FileException.class.php'; 


class File{
    private $file;
    private $fileName;

    /**
     * File constructor
     * @param string $fileName
     * @param array $arrayTypes
     * @throws FileException
     */
    public function __construct(string $fileName, array $arrType){
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
    public function saveUploadFile(string $rutaDestino){
        //Compruebo que el fichero temporal con el que vamos a trabajas se 
        //haya subido previamente por peticion Post
        if(is_uploaded_file($this->file['tmp_name'])===false){
            throw new FileException('El archivo no se ha subido mediante el formulario');
        }
        //Cargamos el nombre del fichero
        $this->fileName=$this->file['name'];//nombre orifinal del fichero cuando se subio
        $ruta=$rutaDestino.$this->fileName;//concateno la rutaDestino con el nombre del fichero
        //Comprobamos que la ruta no se corresponda con un fichero que ya exista
        if(is_file($ruta)==true){
            //no sobreescribo,sino que genero uno nuevo añadiendo la fecha y hotra actual
            $fechaActual=date('dmYHis');
            $this->fileName=$this->fileName.'_'.$fechaActual;
            $ruta=$rutaDestino.$this->fileName;//Actualiza la variable ruta con el nuevo nombre
        }
        //muevo el fichero subido del directorio temporal(viene definido en php.ini)
        if(move_uploaded_file($this->file['tmp_name'],$ruta)===false){
            throw new FileException("No se puede mover el fichero a su destino");
        }
    }
    
}


?>