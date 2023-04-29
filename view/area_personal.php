<?php
//Se incluye el archivo con la clase sesionManager
require_once('../controller/session_manager.php');
require_once('../model/conection.php');
SessionManager::initSession();
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
        <div class="formulario">
          <form action="logout.php" method="post">
            <input type="submit" value="Cerrar sesión">
          </form>
        </div>
            <div class="alert alert-success">
              <a href="#" class="badge badge-success"> Ver carrito</a>
            </div>
</div>
</header>

<main>
  <div class="catalogo">
    <div class="buscar">
      <form>
        <input type="text" name="search" placeholder="Buscar artículos...">
        <input type="submit" value="Buscar">
      </form>
    </div>
  </div>
</main>

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
  </div>

</form>



<footer>
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

  <div class="secciones">
    <div>
      <span> Síguenos en nuestras Redes Sociales:</span>
        <ul class="list-unstyled d-flex">
          <a href="https://www.facebook.com/" target="blank">
            <img src="./images/logos/fb logo.png" width="46px" height="43px" align="right">
          </a>
          <a href="https://www.instagram.com/" target="blank">
            <img src="./images/logos/ig logo.png" width="46px" height="43px" align="right">
          </a>
          <a href="https://www.twitter.com/" target="blank">
            <img src="./images/logos/twitter logo.png" width="46px" height="43px" align="right">
          </a>
        </ul>
    </div>
      <div>
        <h6> Nosotros </h6>
        <a href="./quienes_somos.php" target="_blank"> Quienes somos </a>
        <a href="./trabaja_con_nosotros.php" target="_blank"> Trabaja con nosotros </a>
      </div>
    <div>
      <h6> Servicios </h6>
      <a href="./veterinario.php" target="_blank"> Veterinario </a>
    </div>
    <div>
      <h6> Soporte </h6>
      <a href="./faq.php"> FAQ </a>
      <a href="./contacto.php"> Contacto </a>
    </div>
    <div>
      <h6> Legal </h6>
      <a href="./privacidad.php"> Privacidad </a>
      <a href="./cookies.php"> Cookies </a>
      <a href="./terminos_y_condiciones.php"> Términos y condiciones </a>
    </div>
  </div>
  <div class="copyright">
    <p> Copyright © 2023 Todo +cotas. Todos los derechos reservados </p>
  </div>
</footer>
<script src="../controller/carrito.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>