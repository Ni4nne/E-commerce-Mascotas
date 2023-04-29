<html>
  <?php
  require_once('../controller/session_manager.php');
  require_once('user_validation.php');

  SessionManager::initSession();
  $validar = new user_validation();

  //Se recogen los datos del formulario
  $email = $_POST['email'];
  $password = $_POST['password'];

  $valid = $validar->validarUsuario($email, $password);

  if ($valid) {
    header('Location: ../view/area_personal.php');
  } else {
    echo "No estás registrado. Por favor puedes registrarte ";
  }
  ?>
<a href="../view/signup.php"> aquí </a>

</html>

