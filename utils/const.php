<?php
define('ERROR_MV_UP_FILE', 9);


$errorStrings[UPLOAD_ERR_OK]="No hay ningun error.";
$errorStrings[UPLOAD_ERR_INI_SIZE]="El fichero es demasiado grande";
$errorStrings[UPLOAD_ERR_FORM_SIZE]="El fichero es demasiado grande";
$errorStrings[UPLOAD_ERR_PARTIAL]="No se ha podido subir el fichero";
$errorStrings[UPLOAD_ERR_NO_FILE]="No se encuentra ningun archivo";
$errorStrings[UPLOAD_ERR_NO_TMP_DIR]="No existe el directorio temporal";
$errorStrings[UPLOAD_ERR_CANT_WRITE]="No se puede escribir";
$errorStrings[UPLOAD_ERR_EXTENSION]="No se ha podido mover el archivo de desatino";

define('ERROR_STRINGS',$errorStrings);

?>