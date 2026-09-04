<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>ejemplo</title>
        <style>
            body { font-family: Arial, sans-serif; background: #f4f4f9; padding: 20px; }
            .card { background: #fff; padding: 20px; border-radius: 8px; max-width: 400px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
            .res { margin-top: 10px; padding: 10px; background: #e9ecef; border-left: 4px solid #28a745; }
        </style>
    </head>
    <body>
        <div class="card">
            <h1>ejemplo simple.</h1>
            <p>Primer ejemplo de codigo de PHP embebido dentro de código HTML.</p>
            <div class="res">
                <?php
                // Bloque de PHP embebido directamente dentro del HTML:
                // el navegador solo recibe el HTML resultante, no el código PHP
                echo 'Hola Mundo!';
                ?>
            </div>
        </div>
    </body>
</html>