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
   /**
     * Guarda el archivo en la ubicacion indicada
     * @param string $rutaDestino donde se guardara el archivo
     * @throws FileException Lanza la excepcion
     */
    public function saveUploadFile(string $rutaDestino) {
        // Verifica que el archivo haya sido subido mediante una solicitud POST
        if (!is_uploaded_file($this->file['tmp_name'])) {
            throw new FileException('El archivo no se ha subido mediante el formulario');
        }
    
        // con pathinfo se puede separar el nombre de la extension
        $nombreBase = pathinfo($this->file['name'], PATHINFO_FILENAME);// Este sirve para extraer el nombre
        $extension = pathinfo($this->file['name'], PATHINFO_EXTENSION);// Este sirve para extraer la extension
        
     
        $contador = 1; // contado con el numero que tendra la imagen si se repite 
        $ruta = $rutaDestino . $this->file['name'];//Ruta 
    
        // Si el archivo ya existe,pone un numero despues del nombre y antes de la extension
        while (file_exists($ruta)) {
            $this->fileName = $nombreBase . "_$contador." . $extension;
            $ruta = $rutaDestino . $this->fileName;
            $contador++;
        }
        // si no esta duplicado usa el nombre original
        if ($contador === 1) {
            $this->fileName = $this->file['name'];
        }
    
        // Mueve el archivo subido a la ruta destino final
        if (!move_uploaded_file($this->file['tmp_name'], $ruta)) {
            throw new FileException("No se puede mover el fichero a su destino");
        }
    }
    
    /**
     * @param string $rutaOrigen
     * @param string $rutaDestino
     * @throws FileException
     */
    public function copyFile (string $rutaOrigen,string $rutaDestino){
        $origen = $rutaOrigen.$this->fileName;
        $destino = $rutaDestino.$this->fileName;
        // Verifica que el archivo de origen exista
        if(is_file($origen)==false){
            throw new FileException("No existe el fichero $origen que intentas copiar");

        }
        // Verifica si el archivo de destino ya existe
        if(is_file($destino)==true){
            throw new FileException("El fichero $destino ya existe y no se puede sobreescribir");

        }
        // Copia el archivo de origen al destino
        if(copy($origen,$destino)==false){
            throw new FileException("No se ha podido copiar el fichero $origen a $destino");
        }
    }
    
}


?>