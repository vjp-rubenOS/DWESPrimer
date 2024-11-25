<?php
require_once 'entities/connection.class.php';
require_once 'entities/mensaje.class.php';
require_once 'entities/repository/mensajeRepository.class.php';
require_once 'exceptions/appException.class.php';
require_once 'exceptions/Fileexception.class.php';
require_once 'exceptions/queryException.class.php';

// Variables inicializadas para almacenar los datos
$errores = []; // errores que puedan surgir durante la solicitud de formulario 
$nombre='';
$apellido='';
$email='';
$subject='';
$texto='';

try {
    // Carga la configuracion de la aplicacion desde el archivo
    $config = require_once 'app/config.php';
    // Asocia la configuración al contenedor
    App::bind('config', $config);
    // Instancia de la clase MensajeRepositorio
    $mensajeRepository = new MensajeRepositorio();
    // Comprobacion de si la solicitud fue enviada (tipo POST)
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        // Variables para guardar los datos enviados desde el formulario 
        $mostrarErrores = [];
        $mostrarDatos= [];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $texto = $_POST["texto"];
        //Comprobacion de los campos obligatorios, si estan vacios guarda el error
        if (empty($nombre)) {
            $mostrarErrores[] = "El campo First Name no puede estar vacío";
        }
        if (empty($email)) {
            $mostrarErrores[] = "El campo Email no puede estar vacío";
        }
        if (empty($subject)) {
            $mostrarErrores[] = "El campo subject no puede estar vacío";
        }

        if (empty($mostrarErrores)) {
            // Comprobacion de que el email tenga el formato adecuado
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $mostrarErrores[] = "Email incorrecto";
            } else {
                $mostrarDatos[] = "First Name: $nombre";

                if (!empty($apellido)) {
                    $mostrarDatos[] = "Second name: $apellido";
                }

                $mostrarDatos[] = "Email: $email";
                $mostrarDatos[] = "Subject: $subject";

                if (!empty($texto)) {
                    $mostrarDatos[] = "Message: $texto";
                }
                // Instancia un objeto de tipo mensaje donde guardaremos por parametros los datos del formulario 
                $mensaje = new Mensaje($nombre, $apellido, $email, $subject, $texto);
                //Metodo para guardar los datos en la base de datos
                $mensajeRepository->save($mensaje);
                //Limpia los campos en caso de que se haya enviado bien el formulario 
                $nombre = '';
                $apellido = '';
                $email = '';
                $subject = '';
                $texto = '';
            }
        }

        
    }
    // Captura de errores
} catch (QueryException $exception) {
    $errores[] = $exception->getMessage();
} catch (AppException $exception) {
    $errores[] = $exception->getMessage();
} 

require 'utils/utils.php'; // utils antes que view
require 'views/contact.view.php';
?>
