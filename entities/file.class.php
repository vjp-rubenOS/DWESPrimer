<?php 
class File{
    private $file;
    private $fileName;
    public function _construct(string $fileName, array $arrType){
        // con $fileName obtendremos el fichero mediante el array $_FILES que con
        //todos los ficheros que se suben al servidor mediante un formulario.
        $this->file=$_FILES[$fileName];
        $this->fileName='';

        //Comprobamos que es array contiene el fichero
        if(!isset($this->file)){
            //Mostrar un error
        }

        //verificamos si ha habido algun error durante la subida del fichero
       if($this->file['error'] !== UPLOAD_ERR_OK){
        //Dentro del if verificamos de que tipo ha sido el error
        switch($this->file['error']){
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:{
                //Algun problema con el tamaño del fichero
                break;
            }
            case UPLOAD_ERR_PARTIAL:{
                //Error en la trasferencia -subida incompleta

                break;
            }
            default:{
                //Error en la subida del fichero
                break;
            }

        }
       }
       if(in_array($this->file['type'],$arrType)===false){
        //Error,tipo no soportado
        
       }
        
    }
    public function getFileName(){
        return $this->fileName;
    }
    
}


?>