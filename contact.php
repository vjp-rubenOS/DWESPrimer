<?php
require_once 'entities/connection.class.php';
require_once 'entities/mensaje.class.php';
require_once 'entities/repository/mensajeRepository.class.php';
require_once 'exceptions/appException.class.php';
require_once 'exceptions/Fileexception.class.php';
require_once 'exceptions/queryException.class.php';

$errores = [];
$nombre='';
$apellido='';
$email='';
$subject='';
$texto='';

try {
    $config = require_once 'app/config.php';
    App::bind('config', $config);

    $mensajeRepository = new MensajeRepositorio();

    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $mostrarErrores = [];
        $mostrarDatos= [];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $texto = $_POST["texto"];

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
                $mensaje = new Mensaje($nombre, $apellido, $email, $subject, $texto);
                $mensajeRepository->save($mensaje);
            }
        }

        
    }
} catch (QueryException $exception) {
    $errores[] = $exception->getMessage();
} catch (AppException $exception) {
    $errores[] = $exception->getMessage();
} catch (PDOException $exception) {
    $errores[] = $exception->getMessage();
}

require 'utils/utils.php'; // utils antes que view
require 'views/contact.view.php';
?>
