<?php
//Se incluye el archivo con la clase sesionManager y se inicia la sesion
require_once('../controller/session_manager.php');
SessionManager::initSession();


if(isset($_SESSION['carrito'])) {
    $carrito_usuario=$_SESSION['carrito'];
        $codigo=$_POST['codigo'];
        $descripcion=$_POST['descripcion'];
        $precio=$_POST['precio'];
}





?>