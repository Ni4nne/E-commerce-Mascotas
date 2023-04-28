<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
  <?php
  //Se incluye la clase sesionManager y se llama la funcion para iniciar sesion
  require_once('./session_manager.php');
  SessionManager::initSession();

  //Se recogen los datos del formulario
  $email = $_POST['email'];
  $password = $_POST['password'];

  //Se incluye la clase user_validation y se llama la funcion para hacer la comprobación
  include('./user_validation.php');
  $validar = new user_validation();

  $valid = $validar->validarUsuario($email, $password);

  if ($valid) {
    header('Location: ../view/area_personal.php');
  } else {
    echo "No estás registrado. Por favor puedes registrarte ";
  }
  ?>
<a href="../view/signup.php"> aquí </a>
</body>
</html>

