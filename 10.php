<?php

// Array de prueba
$array = [1, 3, 3, 8, 4, 3, 2, 3, 3];

// Calcular la suma total del array
$sumaTotal = array_sum($array);

// Inicializar la suma acumulada de los elementos a la izquierda
$sumaIzquierda = 0;

// Recorrer el array buscando el punto de división
for ($i = 0; $i < count($array); $i++) {
    // Sumar el valor actual a la suma acumulada de la izquierda
    $sumaIzquierda += $array[$i];
    
    // Si la suma acumulada de la izquierda es igual a la suma total menos la suma acumulada
    if ($sumaIzquierda == $sumaTotal - $sumaIzquierda) {
        // Dividir el array en dos partes
        $parteIzquierda = array_slice($array, 0, $i + 1);
        $parteDerecha = array_slice($array, $i + 1);
        
        // Mostrar el resultado
        echo "Parte izquierda: [" . implode(", ", $parteIzquierda) . "] = " . array_sum($parteIzquierda) . "\n";
        echo "Parte derecha: [" . implode(", ", $parteDerecha) . "] = " . array_sum($parteDerecha) . "\n";
        break;
    }
}
