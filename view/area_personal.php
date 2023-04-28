<?php
//Se incluye el archivo con la clase sesionManager
require_once('../controller/session_manager.php');
SessionManager::initSession();

//Se incluye la conexión a la base de datos
require_once('../model/conection.php');
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
    <div class="carrito">
      <button class="cart-btn" id="carrito"><i class="fas fa-shopping-cart"></i> Carrito</button>
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
  <div class="row">

  </div>
</div>
</main>
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img src="./images/catalogo/articulo1.jpg" width="100" height="100">
            <div class="card-body">
              <p class="card-text" style="font-size: 12px;">Referencia Artículo: 1</p>
              <p class="card-text">Descripcion: Pienso para perros raza pequeña.</p>
              <p class="card-text">Precio: 12.00 €</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Añadir</button>
                </div>
              </div>
            </div>
          </div>
        </div>
 
        <div class="col">
          <div class="card shadow-sm">
            <img src="./images/catalogo/articulo2.jpg" width="100" height="100">
            <div class="card-body">
              <p class="card-text" style="font-size: 12px;">Referencia Artículo: 2</p>
              <p class="card-text">Descripcion: Pienso para perros raza pequeña.</p>
              <p class="card-text">Precio: 12.00 €</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Añadir</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="./images/catalogo/articulo3.jpg" width="100" height="100">
            <div class="card-body">
              <p class="card-text" style="font-size: 12px;">Referencia Artículo: 3</p>
              <p class="card-text">Descripcion: Pienso para perros raza pequeña.</p>
              <p class="card-text">Precio: 12.00 €</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Añadir</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="./images/catalogo/articulo4.jpg" width="100" height="100">
            <div class="card-body">
              <p class="card-text" style="font-size: 12px;">Referencia Artículo: 4</p>
              <p class="card-text">Descripcion: Pienso para perros raza pequeña.</p>
              <p class="card-text">Precio: 12.00 €</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Añadir</button>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col">
          <div class="card shadow-sm">
            <img src="./images/catalogo/articulo5.jpg" width="100" height="100">
            <div class="card-body">
              <p class="card-text" style="font-size: 12px;">Referencia Artículo: 5</p>
              <p class="card-text">Descripcion: Pienso para perros raza pequeña.</p>
              <p class="card-text">Precio: 12.00 €</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Añadir</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="./images/catalogo/articulo6.jpg" width="100" height="100">
            <div class="card-body">
              <p class="card-text" style="font-size: 12px;">Referencia Artículo: 6</p>
              <p class="card-text">Descripcion: Pienso para perros raza pequeña.</p>
              <p class="card-text">Precio: 12.00 €</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Añadir</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="./images/catalogo/articulo7.jpg" width="100" height="100">
            <div class="card-body">
              <p class="card-text" style="font-size: 12px;">Referencia Artículo: 7</p>
              <p class="card-text">Descripcion: Pienso para perros raza pequeña.</p>
              <p class="card-text">Precio: 12.00 €</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Añadir</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="./images/catalogo/articulo8.jpg" width="100" height="100">
            <div class="card-body">
              <p class="card-text" style="font-size: 12px;">Referencia Artículo: 8</p>
              <p class="card-text">Descripcion: Pienso para perros raza pequeña.</p>
              <p class="card-text">Precio: 12.00 €</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Añadir</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="./images/catalogo/articulo9.jpg" width="100" height="100">
            <div class="card-body">
              <p class="card-text" style="font-size: 12px;">Referencia Artículo: 9</p>
              <p class="card-text">Descripcion: Pienso para perros raza pequeña.</p>
              <p class="card-text">Precio: 12.00 €</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Añadir</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="./images/catalogo/articulo10.jpg" width="100" height="100">
            <div class="card-body">
              <p class="card-text" style="font-size: 12px;">Referencia Artículo: 10</p>
              <p class="card-text">Descripcion: Pienso para perros raza pequeña.</p>
              <p class="card-text">Precio: 12.00 €</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Añadir</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="./images/catalogo/articulo11.jpg" width="100" height="100">
            <div class="card-body">
              <p class="card-text" style="font-size: 12px;">Referencia Artículo: 11</p>
              <p class="card-text">Descripcion: Pienso para perros raza pequeña.</p>
              <p class="card-text">Precio: 12.00 €</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Añadir</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="./images/catalogo/articulo12.jpg" width="100" height="100">
            <div class="card-body">
              <p class="card-text" style="font-size: 12px;">Referencia Artículo: 12</p>
              <p class="card-text">Descripcion: Pienso para perros raza pequeña.</p>
              <p class="card-text">Precio: 12.00 €</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Añadir</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="./images/catalogo/articulo13.jpg" width="100" height="100">
            <div class="card-body">
              <p class="card-text" style="font-size: 12px;">Referencia Artículo: 13</p>
              <p class="card-text">Descripcion: Pienso para perros raza pequeña.</p>
              <p class="card-text">Precio: 12.00 €</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Añadir</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="./images/catalogo/articulo14.jpg" width="100" height="100">
            <div class="card-body">
              <p class="card-text" style="font-size: 12px;">Referencia Artículo: 14</p>
              <p class="card-text">Descripcion: Pienso para perros raza pequeña.</p>
              <p class="card-text">Precio: 12.00 €</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Añadir</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="./images/catalogo/articulo15.jpg" width="100" height="100">
            <div class="card-body">
              <p class="card-text" style="font-size: 12px;">Referencia Artículo: 15</p>
              <p class="card-text">Descripcion: Pienso para perros raza pequeña.</p>
              <p class="card-text">Precio: 12.00 €</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Añadir</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="./images/catalogo/articulo16.jpg" width="100" height="100">
            <div class="card-body">
              <p class="card-text" style="font-size: 12px;">Referencia Artículo: 16</p>
              <p class="card-text">Descripcion: Pienso para perros raza pequeña.</p>
              <p class="card-text">Precio: 12.00 €</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Añadir</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="./images/catalogo/articulo17.jpg" width="100" height="100">
            <div class="card-body">
              <p class="card-text" style="font-size: 12px;">Referencia Artículo: 17</p>
              <p class="card-text">Descripcion: Pienso para perros raza pequeña.</p>
              <p class="card-text">Precio: 12.00 €</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Añadir</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="./images/catalogo/articulo18.jpg" width="100" height="100">
            <div class="card-body">
              <p class="card-text" style="font-size: 12px;">Referencia Artículo: 18</p>
              <p class="card-text">Descripcion: Pienso para perros raza pequeña.</p>
              <p class="card-text">Precio: 12.00 €</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Añadir</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="./images/catalogo/articulo19.jpg" width="100" height="100">
            <div class="card-body">
              <p class="card-text" style="font-size: 12px;">Referencia Artículo: 19</p>
              <p class="card-text">Descripcion: Pienso para perros raza pequeña.</p>
              <p class="card-text">Precio: 12.00 €</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Añadir</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="./images/catalogo/articulo20.jpg" width="100" height="100">
            <div class="card-body">
              <p class="card-text" style="font-size: 12px;">Referencia Artículo: 20</p>
              <p class="card-text">Descripcion: Pienso para perros raza pequeña.</p>
              <p class="card-text">Precio: 12.00 €</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Añadir</button>
                </div>
              </div>
            </div>
          </div>
        </div>
</main>


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