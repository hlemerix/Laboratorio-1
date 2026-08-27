<?php

$nombre = $_REQUEST['nombre'];
$num1 = $_REQUEST['num1'];
$num2 = $_REQUEST['num2'];

echo "Hola " . $nombre . ", estos son los resultados:<br><br>";

$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multiplicacion = $num1 * $num2;

echo "Los numeros ingresados son: " . $num1 . " y " . $num2 . "<br>";
echo "La suma es: " . $suma . "<br>";
echo "La resta es: " . $resta . "<br>";
echo "La multiplicacion es: " . $multiplicacion . "<br>";

if ($num2 != 0) {
    $division = $num1 / $num2;
    $redondeo = round($division, 2);
    echo "La division es: " . $division . "<br>";
    echo "La division redondeada es: " . $redondeo . "<br>";
} else {
    echo "No se puede dividir entre cero<br>";
}

?>