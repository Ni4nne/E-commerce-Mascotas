<?php

//Se incluye la conexión a la base de datos
require_once('conection.php');

//Se recogen los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$conexion = new Conexion();
$con = $conexion->getConexion();

$registrarContacto = "INSERT INTO contacto (nombre, email, mensaje) VALUES ('$nombre', '$email', '$mensaje')";

$resultado = $con->query($registrarContacto);

if ($resultado) {
    echo "Tu mensaje se ha enviado ";
} else {
  echo "Se ha producido un error durante el envío. ";
}
?>