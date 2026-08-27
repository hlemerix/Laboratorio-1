<?php
// 1 pulgada = 2.54 centímetros
$factor = 2.54;

echo "Introduce el numero de pulgadas: ";
$pulgadas = trim(fgets(STDIN));
$centimetros = $pulgadas * $factor;

echo "El resultado es: " . number_format($centimetros, 2) . " centimetros\n";
?>