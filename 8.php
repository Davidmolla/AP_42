<?php

// Array bidimensional de ejemplo
$array = [
    [1, 5, 8, 5],
    [7, 3, 2, 4],
    [1, 6, 2, 4]
];

// Realizar la transposición
$transpuesta = [];

// Obtener el número de columnas (que será el número de filas de la transposición)
$columnas = count($array[0]);

// Recorrer cada columna y crear la nueva fila en la transposición
for ($i = 0; $i < $columnas; $i++) {
    $nuevaFila = [];
    foreach ($array as $fila) {
        $nuevaFila[] = $fila[$i];
    }
    $transpuesta[] = $nuevaFila;
}

// Mostrar el array transpuesto
echo "Array transpuesto:\n";
foreach ($transpuesta as $fila) {
    echo "[" . implode(", ", $fila) . "]\n";
}
