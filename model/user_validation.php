<?php

//Se incluye la conexión a la base de datos
require_once('conection.php');

class user_validation {
    public function validarUsuario($email, $password) {
        $conexion = new Conexion();
        $con = $conexion->getConexion();

        $consultaUsuario="SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'";
        $resultado = $con->query($consultaUsuario);
        
        if ($resultado->num_rows == 1) {
            $con->close();
            return true;
        } else {
            $con->close();
            return false;
        }
    }
}