<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Trabajo con Variables en PHP</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f9; padding: 20px; }
        .card { background: #fff; padding: 20px; border-radius: 8px; max-width: 420px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .card h1 { margin-top: 0; }
    </style>
</head>
<body>
    <div class="card">
        <?php
        // Declaración de dos variables de tipo cadena (string)
        $author1 = "John Doe";
        $author2 = "Max Mustermann";

        // Impresión de HTML combinando texto fijo con el valor de las variables
        // mediante interpolación dentro de comillas dobles
        echo "<h1>Hello World!</h1> 
        <p>This dynamic web page was created by $author1 and $author2.</p>";
        ?>
    </div>
</body>
</html>