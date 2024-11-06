<?php
define('ERROR_MV_UP_FILE', 9);
define('ERROR_EXECUTE_STATEMENT',10);
define('ERROR_APP_CORE',11);
define('ERROR_CON_DB',11);

function getErrorString($errorCode) {
    return match ($errorCode) {
        UPLOAD_ERR_OK => "No hay ningún error.",
        UPLOAD_ERR_INI_SIZE => "El archivo es demasiado grande.",
        UPLOAD_ERR_FORM_SIZE => "El archivo es demasiado grande.",
        UPLOAD_ERR_PARTIAL => "No se ha podido subir el archivo.",
        UPLOAD_ERR_NO_FILE => "No se ha encontrado ningún archivo.",
        UPLOAD_ERR_NO_TMP_DIR => "No existe el directorio temporal.",
        UPLOAD_ERR_CANT_WRITE => "No se puede escribir.",
        UPLOAD_ERR_EXTENSION => "Error de extensión del archivo.",
        //Personalizados
        ERROR_MV_UP_FILE => "No se ha podido mover el archivo de destino.",
        ERROR_EXECUTE_STATEMENT=>"No se ha podido ejecutar la consulta",
        ERROR_APP_CORE=> "No se ha enctontrado la clave en el contenedor",
        ERROR_CON_DB=>"No se ha podido hacer la conexion a la base de datos",
        default => "Error desconocido",
    };
}
?>