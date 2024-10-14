<?php

$errores = [];
$nombre = '';
$apellido = '';
$email = '';
$subject = '';
$texto = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Guardamos los datos del formulario con trim para quitar espacios al principio y final
    $nombre = isset($_POST['nombre']) ? htmlspecialchars(trim($_POST['nombre'])) : '';
    $apellido = isset($_POST['apellido']) ? htmlspecialchars(trim($_POST['apellido'])) : '';
    $email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
    $subject = isset($_POST['subject']) ? htmlspecialchars(trim($_POST['subject'])) : '';
    $texto = isset($_POST['texto']) ? htmlspecialchars(trim($_POST['texto'])) : '';

    // Validamos los campos obligatorios
    if (empty($nombre)) {
        $errores[] = "El campo First Name no puede estar vacío.";
    }
    if (empty($email)) {
        $errores[] = "El campo Email no puede estar vacío.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "Formato de email incorrecto.";
    }
    if (empty($subject)) {
        $errores[] = "El campo Subject no puede estar vacío.";
    }
}

// Función para mostrar el mensaje de error o éxito directamente
function mostrarMensaje($errores, $nombre, $apellido, $email, $subject, $texto)
{
    if (!empty($errores)) {
        // Si hay errores, mostramos la lista de errores
        echo "<div class='alert alert-danger'><ul>";
        foreach ($errores as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul></div>";
    } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Si no hay errores, mostramos la información enviada
        echo "<div class='alert alert-info'>";
        echo "First Name: " . htmlspecialchars($nombre) . "<br>";
        echo "Last Name: " . htmlspecialchars($apellido) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Subject: " . htmlspecialchars($subject) . "<br>";
        echo "Message: " . htmlspecialchars($texto) . "<br>";
        echo "</div>";
    }
}

require 'views/contact.view.php';
require 'utils/utils.php';
?>