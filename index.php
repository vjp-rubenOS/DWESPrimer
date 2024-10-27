<?php
require 'utils/utils.php';
require 'entities/ImagenGaleria.class.php';

// Crear imágenes y asignarlas una vez
$imagenes = [];
for ($i = 1; $i <= 12; $i++) {
    $imagenes[] = new ImagenGaleria($i . '.jpg', 'imagen' . $i, rand(0, 1000), rand(0, 1000), rand(0, 1000));
}

// Definir categorías con los mismos elementos para ejemplo
$categorias = [
    'category1' => $imagenes,
    'category2' => $imagenes,
    'category3' => $imagenes
];

// Obtener la categoría activa de la URL o asignar una por defecto
$categoriaActiva = $_GET['categoria'] ?? 'category1';


// Validar la categoría
if (!array_key_exists($categoriaActiva, $categorias)) {
    $categoriaActiva = 'category1';
}

// Obtener las imágenes correspondientes a la categoría activa
$imagenesCategoria = $categorias[$categoriaActiva];
shuffle($imagenesCategoria); // Barajar el array de imágenes para que el orden sea aleatorio

// Renderizar la vista principal
require 'views/index.view.php';


?>