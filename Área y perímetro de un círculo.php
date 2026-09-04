<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio #1 - Área y Perímetro</title>
    <!-- Estilos CSS integrados para mejorar la interfaz visual -->
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; padding: 20px; }
        .card { background: #fff; padding: 20px; border-radius: 8px; max-width: 400px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        input[type="number"] { width: 100%; padding: 8px; margin: 10px 0; border: 1px solid #ccc; border-radius: 4px; }
        button { background-color: #007bff; color: white; border: none; padding: 10px 15px; border-radius: 4px; cursor: pointer; }
        button:hover { background-color: #0056b3; }
        .resultado { margin-top: 15px; padding: 10px; background-color: #e9ecef; border-radius: 4px; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Área y Perímetro de un Círculo</h2>
        <!-- Formulario con método POST para el envío seguro de datos -->
        <form method="POST">
            <label for="radio">Ingrese el radio (r):</label>
            <!-- Validación HTML5: min="0.01" impide valores negativos o cero -->
            <input type="number" step="any" min="0.01" id="radio" name="radio" required placeholder="Ej. 5.5">
            <button type="submit" name="calcular">Calcular</button>
        </form>

        <?php
        // Verifica si la solicitud fue enviada al pulsar el botón "calcular"
        if (isset($_POST['calcular'])) {
            // Conversión explícita del valor recibido a número flotante
            $radio = (float)$_POST['radio'];
            
            // Validación adicional del lado del servidor (Backend)
            if ($radio > 0) {
                // M_PI entrega el valor matemático de Pi y pow() calcula r²
                $area = M_PI * pow($radio, 2);
                
                // Cálculo del perímetro: 2 * π * r
                $perimetro = 2 * M_PI * $radio;

                // Presentación del resultado formateado a 2 decimales
                echo "<div class='resultado'>";
                echo "<p><strong>Área:</strong> " . number_format($area, 2) . "</p>";
                echo "<p><strong>Perímetro:</strong> " . number_format($perimetro, 2) . "</p>";
                echo "</div>";
            } else {
                echo "<p style='color:red;'>El radio debe ser un número mayor a cero.</p>";
            }
        }
        ?>
    </div>
</body>
</html>