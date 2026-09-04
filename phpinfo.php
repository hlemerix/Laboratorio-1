<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Información de PHP</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f9; padding: 20px; }
        .card { background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .card h2 { margin-top: 0; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Problema #3: Verificación de instalación de PHP</h2>
        <?php
        // phpinfo() muestra toda la información de configuración del servidor
        // y del intérprete de PHP: versión, extensiones activas, variables, etc.
        phpinfo();
        ?>
    </div>
</body>
</html>