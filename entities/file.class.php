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
     * 
     */
    public function saveUploadFile(string $rutaDestino) {
        // Verifica que el archivo haya sido subido mediante una solicitud POST
        if (!is_uploaded_file($this->file['tmp_name'])) {
            throw new FileException('El archivo no se ha subido mediante el formulario');
        }
    
        // Extrae el nombre y extensión del archivo
        $nombreBase = pathinfo($this->file['name'], PATHINFO_FILENAME);
        $extension = pathinfo($this->file['name'], PATHINFO_EXTENSION);
        
        // Define la ruta inicial y el contador
        $contador = 1;
        $ruta = $rutaDestino . $this->file['name'];
    
        // Si el archivo ya existe, agrega un número al nombre
        while (file_exists($ruta)) {
            $this->fileName = $nombreBase . "_$contador." . $extension;
            $ruta = $rutaDestino . $this->fileName;
            $contador++;
        }
    
        // Si no se han encontrado duplicados, usa el nombre original
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
        if(is_file($origen)==false){
            throw new FileException("No existe el fichero $origen que intentas copiar");

        }
        if(is_file($destino)==true){
            throw new FileException("El fichero $destino ya existe y no se puede sobreescribir");

        }
        if(copy($origen,$destino)==false){
            throw new FileException("No se ha podido copiar el fichero $origen a $destino");
        }
    }
    
}


?>