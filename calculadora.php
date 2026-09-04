<?php
$nombre = $_REQUEST['nombre'] ?? '';
$num1 = $_REQUEST['num1'] ?? '';
$num2 = $_REQUEST['num2'] ?? '';

$mostrarResultados = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $nombre !== '' && $num1 !== '' && $num2 !== '') {
    if (is_numeric($num1) && is_numeric($num2)) {
        $mostrarResultados = true;
        $num1 = floatval($num1);
        $num2 = floatval($num2);
    } else {
        $error = "Num1 y Num2 deben ser numeros.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>

<form method="post" action="">
    Nombre: <input type="text" name="nombre" value="<?= htmlspecialchars($nombre) ?>"><br><br>
    Num1: <input type="text" name="num1" value="<?= htmlspecialchars($num1) ?>"><br><br>
    Num2: <input type="text" name="num2" value="<?= htmlspecialchars($num2) ?>"><br><br>
    <input type="submit" value="Calcular">
</form>

<br>

<?php if (isset($error)): ?>
    <p style="color:red;"><?= htmlspecialchars($error) ?></p>
<?php endif; ?>

<?php if ($mostrarResultados): ?>
    <?php
    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $multiplicacion = $num1 * $num2;
    ?>

    Hola <?= htmlspecialchars($nombre) ?>, estos son los resultados:<br><br>

    Los numeros ingresados son: <?= $num1 ?> y <?= $num2 ?><br>
    La suma es: <?= $suma ?><br>
    La resta es: <?= $resta ?><br>
    La multiplicacion es: <?= $multiplicacion ?><br>

    <?php if ($num2 != 0): ?>
        <?php
        $division = $num1 / $num2;
        $redondeo = round($division, 2);
        ?>
        La division es: <?= $division ?><br>
        La division redondeada es: <?= $redondeo ?><br>
    <?php else: ?>
        No se puede dividir entre cero<br>
    <?php endif; ?>

<?php endif; ?>

</body>
</html>