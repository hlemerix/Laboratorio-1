<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario de entrada del dato</title>
  <style>
    body { font-family: Arial, sans-serif; background: #f4f4f9; padding: 20px; }
    .card { background: #fff; padding: 20px; border-radius: 8px; max-width: 350px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
    label { display: block; margin-top: 10px; }
    input[type="text"] { width: 100%; padding: 8px; margin: 5px 0; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
    input[type="submit"] { background: #007bff; color: #fff; border: none; padding: 10px 15px; border-radius: 4px; cursor: pointer; margin-top: 10px; }
    input[type="submit"]:hover { background: #0056b3; }
  </style>
</head>
<body>
  <div class="card">
    <h2>Formulario de entrada del dato</h2>
    <!-- El formulario envía los datos por método POST hacia pagina2.php -->
    <form method="post" action="pagina2.php">
      <label for="nombre">Ingrese su nombre:</label>
      <!-- required obliga a llenar el campo antes de enviar (validación del lado del cliente) -->
      <input type="text" name="nombre" id="nombre" required placeholder="Ej. Hanna">

      <label for="edad">Ingrese su Edad:</label>
      <!-- pattern restringe la entrada a solo dígitos -->
      <input type="text" name="edad" id="edad" required pattern="[0-9]+" title="Ingrese solo números" placeholder="Ej. 20">

      <input type="submit" value="Confirmar">
    </form>
  </div>
</body>
</html>