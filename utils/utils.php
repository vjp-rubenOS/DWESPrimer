<?php


// Funcion que determina si la opcion del menu actual esta activa 
// Recibe por parametro un string que es la URL de una de las opciones del menu

function esOpcionMenuActiva(string $opcionMenu): bool
{
    // Compara la URL actual de la pagina ($_SERVER['REQUEST_URI']) con la opción del menu
    // Si coinciden retorna true, lo que indica que esta activa.
    return $_SERVER['REQUEST_URI'] === $opcionMenu;
}

// Funcion para verificar si alguna de las opciones del array esta activa
// Recibe un array que contiene varias rutas de opciones del menu.
function existeOpcionMenuActivaEnArray(array $opcionesMenu): bool
{
    // Recorre el array.
    foreach ($opcionesMenu as $opcion) {
        // Para cada opcion, llama a la funcion creada antes 'esOpcionMenuActiva' para verificar si esta activa.
        // Si alguna de las opciones está activa, retorna true.
        if (esOpcionMenuActiva($opcion)) {
            return true;
        }
    }
    // Si ninguna de las opciones del array esta activa, retorna false.
    return false;
}
