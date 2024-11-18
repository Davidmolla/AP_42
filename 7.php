<?php

// Array de prueba con algunos ceros
$valores = [2, 5, 7, 0, 4, 0, 7, -5, 8, 0];

// Crear un nuevo array para almacenar los valores no nulos
$sinCeros = [];

// Crear un array para almacenar los ceros
$ceros = [];

// Recorrer el array y separar los ceros de los demás valores
foreach ($valores as $valor) {
    if ($valor === 0) {
        $ceros[] = $valor; // Guardar los ceros
    } else {
        $sinCeros[] = $valor; // Guardar los demás valores
    }
}

// Combinar los valores no nulos con los ceros al final
$resultado = array_merge($sinCeros, $ceros);

// Mostrar el array final
echo "Array con ceros al final: " . implode(", ", $resultado) . "\n";
