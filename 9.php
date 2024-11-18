<?php

// Array de datos
$datos = [1, 15, 39, 75, 92];

// Solicitar al usuario la diferencia que se desea buscar
echo "Introduce la diferencia: ";
$diferencia = trim(fgets(STDIN)); // Leer la entrada desde teclado

// Comprobar si la diferencia es un número válido
if (!is_numeric($diferencia) || $diferencia < 0) {
    echo "Por favor, introduce un valor numérico válido y mayor o igual a 0.\n";
    exit;
}

// Buscar los pares de números cuya diferencia sea igual a la introducida
$pares = [];

for ($i = 0; $i < count($datos); $i++) {
    for ($j = $i + 1; $j < count($datos); $j++) {
        if (abs($datos[$j] - $datos[$i]) == $diferencia) {
            $pares[] = "({$datos[$i]}, {$datos[$j]})";
        }
    }
}

// Mostrar los pares encontrados
if (count($pares) > 0) {
    echo "Pares con diferencia de {$diferencia}: " . implode(", ", $pares) . "\n";
} else {
    echo "No se encontraron pares con esa diferencia.\n";
}
