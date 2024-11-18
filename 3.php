<?php

$valores = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$pares = [];
$impares = [];

for ($i = 0; $i < count($valores); $i++) {
    if ($valores[$i] % 2 == 0) {
        $pares[] = $valores[$i];
    } else {
        $impares[] = $valores[$i];
    }
}

echo "Pares: ";
for ($i = 0; $i < count($pares); $i++) {
    echo $pares[$i] . " ";
}

echo "\nImpares: ";
for ($i = 0; $i < count($impares); $i++) {
    echo $impares[$i] . " ";
}

