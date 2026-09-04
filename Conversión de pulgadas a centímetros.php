<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio #1 - Conversor</title>
    <!-- Estilos CSS aplicados a la tarjeta y formulario -->
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; padding: 20px; }
        .card { background: #fff; padding: 20px; border-radius: 8px; max-width: 400px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        input[type="number"] { width: 100%; padding: 8px; margin: 10px 0; border: 1px solid #ccc; border-radius: 4px; }
        button { background-color: #28a745; color: white; border: none; padding: 10px 15px; border-radius: 4px; cursor: pointer; }
        button:hover { background-color: #218838; }
        .resultado { margin-top: 15px; padding: 10px; background-color: #d4edda; border-radius: 4px; color: #155724; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Conversor de Pulgadas a Centímetros</h2>
        <!-- Formulario de entrada -->
        <form method="POST">
            <label for="pulgadas">Ingrese las pulgadas:</label>
            <!-- Entrada validada mediante HTML5 -->
            <input type="number" step="any" min="0" id="pulgadas" name="pulgadas" required placeholder="Ej. 10">
            <button type="submit" name="convertir">Convertir</button>
        </form>

        <?php
        // Captura y verificación de los datos enviados mediante POST
        if (isset($_POST['convertir'])) {
            $pulgadas = (float)$_POST['pulgadas'];
            
            // Verificación del valor de entrada
            if ($pulgadas >= 0) {
                // Cálculo de conversión: 1 pulgada equivale exactamente a 2.54 cm
                $centimetros = $pulgadas * 2.54;

                // Despliegue de los resultados estilizados en el HTML
                echo "<div class='resultado'>";
                echo "<p><strong>$pulgadas</strong> pulgadas equivalen a <strong>" . number_format($centimetros, 2) . " cm</strong>.</p>";
                echo "</div>";
            } else {
                echo "<p style='color:red;'>Ingrese un valor válido.</p>";
            }
        }
        ?>
    </div>
</body>
</html>