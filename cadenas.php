<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Problema #5 - Imprimir Cadenas</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f9; padding: 20px; }
        .card { background: #fff; padding: 20px; border-radius: 8px; max-width: 420px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        label { display: block; margin-top: 10px; }
        input[type="text"] { width: 100%; padding: 8px; margin: 5px 0; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { background: #28a745; color: #fff; border: none; padding: 10px 15px; border-radius: 4px; cursor: pointer; margin-top: 10px; }
        button:hover { background: #218838; }
        .resultado { margin-top: 15px; padding: 10px; background: #e9ecef; border-left: 4px solid #28a745; }
        .resultado p { margin: 6px 0; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Problema #5: Imprimir Cadenas</h2>

        <!-- Formulario para que el usuario ingrese su propio nombre y frase -->
        <form method="POST">
            <label for="nombre">Ingrese su nombre:</label>
            <input type="text" name="nombre" id="nombre" required placeholder="Ej. Hanna">

            <label for="frase">Ingrese una frase:</label>
            <input type="text" name="frase" id="frase" required placeholder="Ej. Me gusta programar en PHP">

            <button type="submit" name="procesar">Procesar cadenas</button>
        </form>

        <?php
        // Solo procesa si el formulario fue enviado
        if (isset($_POST['procesar'])) {

            // htmlspecialchars evita inyección de HTML/JS desde el input del usuario
            $nombre = htmlspecialchars($_POST['nombre']);
            $frase  = htmlspecialchars($_POST['frase']);

            if ($nombre !== '' && $frase !== '') {

                // Concatenación de cadenas con el operador punto (.)
                $saludo = "Hola" . ", " . $nombre . "!";

                echo "<div class='resultado'>";

                // Impresión directa con echo (concatenación)
                echo "<p><strong>Saludo:</strong> " . $saludo . "</p>";

                // Impresión con interpolación de variables dentro de comillas dobles
                echo "<p><strong>Frase ingresada:</strong> $frase</p>";

                // strlen() cuenta la cantidad de caracteres de la cadena
                echo "<p><strong>Longitud de la frase:</strong> " . strlen($frase) . " caracteres</p>";

                // str_word_count() cuenta cuántas palabras tiene la frase
                echo "<p><strong>Cantidad de palabras:</strong> " . str_word_count($frase) . "</p>";

                // strtoupper() y strtolower() cambian el formato de la cadena
                echo "<p><strong>En mayúsculas:</strong> " . strtoupper($frase) . "</p>";
                echo "<p><strong>En minúsculas:</strong> " . strtolower($frase) . "</p>";

                // strrev() invierte el orden de los caracteres de la cadena
                echo "<p><strong>Frase invertida:</strong> " . strrev($frase) . "</p>";

                // printf() da formato a la salida combinando texto y datos calculados
                printf("<p><strong>Resumen:</strong> %s escribió una frase de %d caracteres.</p>", $nombre, strlen($frase));

                echo "</div>";
            } else {
                echo "<p style='color:red;'>Por favor complete ambos campos.</p>";
            }
        }
        ?>
    </div>
</body>
</html>