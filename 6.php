<?php

// Definir un array con 10 notas
$notas = [9, 5, 7, 6, 10, 8, 5, 3, 7, 6];

// Verificar que todas las notas sean numéricas
foreach ($notas as $nota) {
    if (!is_numeric($nota)) {
        echo "Error: La nota '$nota' no es numérica.\n";
        exit;
    }
}

// Ordenar el array para facilitar la eliminación de las notas más baja y más alta
sort($notas);

// Eliminar la nota más baja (primero en el array) y la más alta (último en el array)
array_splice($notas, 0, 1); // Eliminar la más baja
array_splice($notas, -1, 1); // Eliminar la más alta

// Calcular la media de las notas restantes
$suma = array_sum($notas);
$cantidad = count($notas);
$media = $suma / $cantidad;

// Imprimir las notas restantes y la media
echo "Notas restantes: " . implode(", ", $notas) . "\n";
echo "La media de las notas restantes es: " . $media . "\n";
