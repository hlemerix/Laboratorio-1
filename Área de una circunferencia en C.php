<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Área de Circunferencia</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background: #f4f4f9; }
        .box { background: #fff; padding: 20px; border-radius: 8px; max-width: 300px; }
        input, button { width: 100%; padding: 8px; margin: 5px 0; box-sizing: border-box; }
        .res { margin-top: 10px; padding: 10px; background: #e9ecef; border-left: 4px solid #007bff; }
    </style>
</head>
<body>
    <div class="box">
        <h3>Área de Circunferencia</h3>
        <!-- Formulario para ingresar el radio -->
        <form method="POST">
            <!-- for/id vinculan la etiqueta con el campo para mejor accesibilidad -->
            <label for="radio">Radio:</label>
            <!-- min="0.01" impide valores negativos o cero desde el navegador -->
            <input type="number" step="any" min="0.01" id="radio" name="radio" required placeholder="Ej. 4.5">
            <button type="submit" name="calc">Calcular</button>
        </form>

        <?php
        // Procesa el cálculo solo si se envía el formulario
        if (isset($_POST['calc'])) {
            $radio = (float)$_POST['radio'];

            // Validación en el servidor: el radio debe ser mayor a cero
            if ($radio > 0) {
                $area = M_PI * pow($radio, 2); // Fórmula: π * r²
                echo "<div class='res'><strong>Área:</strong> " . number_format($area, 2) . "</div>";
            } else {
                echo "<div class='res' style='border-left-color:red;color:red;'>El radio debe ser un número mayor a cero.</div>";
            }
        }
        ?>
    </div>
</body>
</html>