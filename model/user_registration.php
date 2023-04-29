<?php
require_once('conection.php');

class user_registration {
    public function registrarUsuario($nombre, $apellido, $email, $password) {
        $conexion = new Conexion();
        $con = $conexion->getConexion();

        $registrarUsuario = "INSERT INTO usuarios (nombre, apellido, email, password) VALUES ('$nombre', '$apellido', '$email', '$password')";

        $resultado = $con->query($registrarUsuario);

        if ($resultado) {
            // El usuario ha sido registrado exitosamente
            return true;
        } else {
            // Hubo un error al registrar el usuario
            return false;
        }
    }
}
