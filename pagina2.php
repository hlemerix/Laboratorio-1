<html>
<head>
  <title>Resultado</title>
</head>
<body>
  <?php
  // Verifica que el formulario haya sido enviado antes de leer los datos
  // Esto evita el warning "Undefined array key" al entrar directo a esta página
  if (isset($_POST['nombre']) && isset($_POST['edad'])) {

      // htmlspecialchars evita que se inyecte código HTML/JS desde el input (seguridad básica)
      $nombreCrudo = htmlspecialchars($_POST['nombre']);
      $edad        = htmlspecialchars($_POST['edad']);

      // Normaliza el nombre sin importar cómo lo haya escrito el usuario:
      // 1) strtolower() pasa todo a minúsculas (ej. "HANNA" o "hAnNa" -> "hanna")
      // 2) ucwords() pone en mayúscula la primera letra de cada palabra (ej. "hanna" -> "Hanna")
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

  } else {
      // Se muestra si alguien entra directo a pagina2.php sin pasar por el formulario
      echo "No se recibieron datos. Por favor complete el formulario primero.";
  }
  ?>
</body>
</html>