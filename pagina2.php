<html>
<head>
  <title>Resultado</title>
</head>
<body>
  <?php
  // Verifica que el formulario haya sido enviado antes de leer los datos
  if (isset($_POST['nombre']) && isset($_POST['edad'])) {

      $nombreCrudo = htmlspecialchars($_POST['nombre']);
      $edad        = htmlspecialchars($_POST['edad']);

      // Validación: el nombre solo debe contener letras (incluye tildes, ñ) y espacios
      if (!preg_match('/^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/', $nombreCrudo)) {
          echo "El nombre no puede contener números ni caracteres especiales.";
      } else {
          // Normaliza el nombre sin importar cómo lo haya escrito el usuario
          $nombre = ucwords(strtolower($nombreCrudo));

          echo "El nombre es: $nombre";
          echo "<br><br>";

          // Validación: la edad debe ser un número antes de compararla
          if (is_numeric($edad)) {
              if ($edad >= 18) {
                  echo "Usted es mayor de edad";
              } else {
                  echo "Usted no es mayor de edad";
              }
          } else {
              echo "La edad ingresada no es un número válido";
          }
      }

  } else {
      echo "No se recibieron datos. Por favor complete el formulario primero.";
  }
  ?>
</body>
</html>