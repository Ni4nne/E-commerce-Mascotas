<?php

//Se incluye la conexión a la base de datos
require_once('conection.php');

//Se recogen los datos del formulario
$mascota = $_POST['mascota'];
$propietario = $_POST['propietario'];
$telefono = $_POST['telefono'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$sintomas = $_POST['sintomas'];

$conexion = new Conexion();
$con = $conexion->getConexion();

$registrarAgenda = "INSERT INTO veterinario (nombre_mascota, nombre_propietario, telefono, fecha, hora, sintomas) VALUES ('$mascota', '$propietario', '$telefono', '$fecha', '$hora', '$sintomas')";

$resultado = $con->query($registrarAgenda);

if ($resultado) {
  header('Location: ../view/veterinario.php');
    
} else {
  echo "Se ha producido un error durante el registro en la agenda. ";
}
?>



