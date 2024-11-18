<?php
// Crear un array con valores iniciales
$valores = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// Invertir el array
$valoresInvertidos = array_reverse($valores);

// Mostrar los valores en orden inverso
echo "Valores en orden inverso:\n";
foreach ($valoresInvertidos as $valor) {
    echo $valor . "\n";
}
?>
