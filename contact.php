<?php

$errores=[];
$nombre='';
$apellido='';
$email='';
$subject='';
$texto='';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Guardamos los datos del formulario con trim para quitar espacios al principio y final
    // y usamos htmlspecialchars para "saltar" los comando que puedan meter de html

    $nombre=isset($_POST['nombre'])?htmlspecialchars(trim($_POST['nombre'])): '';
    $apellido=isset($_POST['apellido'])?htmlspecialchars(trim($_POST['apellido'])): '';
    $email=isset($_POST['email'])?htmlspecialchars(trim($_POST['email'])): '';
    $subject=isset($_POST['subject'])?htmlspecialchars(trim($_POST['subject'])): '';
    $texto=isset($_POST['texto'])?htmlspecialchars(trim($_POST['texto'])): '';

    // validamos los campos que son obligatorios
    // Campo nombre
    if(empty($nombre)){
        $errores[]="El campo First Name no puede estar vacio";
    }
    //Campo email, que no solo validamos si esta vacion sino que tenga el formato adecuado
    if(empty($email)){
        $errores[]=" El campo Email no puede estar vacio";
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errores[]="Email incorrecto";
    }

    //Campo asunto
    if(empty($subject)){
        $errores[]="El campo subject no puede estar vacio";
    }
    // Si no hya errores mostramos la informacion de los campos
    if(empty($errores)){
        echo "<div class='alert alert-info'>";
        echo "<h1>Informacion enviada</h1><br>";
        echo "Nombre: $nombre<br>";
        echo "Apellido: $apellido<br>";
        echo "Correo $email<br>";
        echo "Asunto: $subject<br>";
        echo "Mensaje: $texto<br>";
        echo "</div>";

        // Borramos los valores que habia en los campos y los ponemos vacios, si no se quedan los campos que hemos escrito 
        $nombre = $apellido = $email = $subject = $texto = '';
    }

    
}
require 'views/contact.view.php';

?>