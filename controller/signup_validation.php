<html>
<?php 
//Se incluyen los archivos para manejar sesion, validar y registrar usuario
require_once('./session_manager.php');
include('./user_validation.php');
include('./user_registration.php');

//Se instancian las clases
SessionManager::initSession();
$validar = new user_validation();
$registrar = new user_registration();

//Se recogen los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$password = $_POST['password'];

//Se comprueba si existe el usuario
$existe = $validar->validarUsuario($email, $password);

if (!$existe) {
  //Se registra el usuario
  $registro_exitoso = $registrar->registrarUsuario($nombre, $apellido, $email, $password);
  
  if ($registro_exitoso) {
    //Se redirige al usuario a la página de inicio de sesión
    header('Location: ../view/area_personal.php');
  } else {
    echo "Hubo un error al registrar al usuario.";
  }
} else {
  //El usuario ya está registrado
  echo "Ya estás registrado. Por favor puedes acceder con tu usuario y contraseña <a href='../view/login.php'>aquí</a>.";
}
?>

</html>