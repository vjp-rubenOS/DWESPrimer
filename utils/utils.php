<?php


// Funcion que determina si la opcion del menu actual esta activa 
// Recibe por parametro un string que es la URL de una de las opciones del menu

function esOpcionMenuActiva(string $opcionMenu): bool {
    // Compara la URL actual de la pagina ($_SERVER['REQUEST_URI']) con la opción del menu
    // Si coinciden retorna true, lo que indica que esta activa.
    return $_SERVER['REQUEST_URI'] === $opcionMenu;
}

// Función para verificar si alguna de las opciones en un array está activa
// Recibe un array que contiene varias rutas de opciones del menú.
function existeOpcionMenuActivaEnArray(array $opcionesMenu): bool {
    // Recorre cada opción del array.
    foreach ($opcionesMenu as $opcion) {
        // Para cada opción, llama a la función 'esOpcionMenuActiva' para verificar si está activa.
        // Si alguna de las opciones está activa, retorna true inmediatamente.
        if (esOpcionMenuActiva($opcion)) {
            return true;
        }
    }
    // Si ninguna de las opciones del array está activa, retorna false.
    return false;
}

?>
