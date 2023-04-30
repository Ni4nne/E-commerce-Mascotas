<?php
//Se incluye el archivo con la clase sesionManager
require_once('../controller/session_manager.php');
require_once('../model/conection.php');
//SessionManager::initSession();
$conexion = new Conexion();
$con = $conexion->getConexion();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Área personal</title>
  <link rel="stylesheet" href="./css/area_personal.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
  <header>
    <nav class="navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="./images/logos/Logo.png" alt="Logo" class="d-inline-block align-text-center"> Productos y Servicios de calidad para tu mejor amigo </a>
    </nav>

<div class="opcUsuario">
    <div class="saludo">
      <p> Bienvenido! </p>
    </div>

    <div class="logout">
      <form action="logout.php" method="post">
        <input type="submit" value="Cerrar sesión">
      </form>
    </div>
  <br>
    <div class="carrito">
    <button class="cart-btn" id="carrito"><i class="fas fa-shopping-cart"></i> Carrito</button>
    </div>

</div>
</header>

<main>
  <br>
<form action="ver_carrito.php" method="POST">
  <div class="row">
    <?php
      $consultaArticulos = "SELECT * FROM articulos";
      $resultadoArticulos = $con->query($consultaArticulos);
      while ($row = $resultadoArticulos->fetch_array()) { 
        echo '<div class="card" style="width: 15rem;">
                <img src="'.$row['ruta_img'].'" class="card-img-top">
                <div class="card-body">
                  <p class="card-text" style="font-size: 12px;">Código Artículo: '.$row['codigo'].'</p>
                  <p class="card-text">Descripción: '.$row['descripcion'].'</p>
                  <p class="card-text">Precio: '.$row['precio'].' € </p>
                  <button type="button" class="btn btn-primary" type="submit"> Añadir </button>
                </div>
              </div>';
      }?>

</main>    
<br>       

           <?php require('footer.php');?>

<script src="../controller/carrito.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>