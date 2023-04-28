<?php
//Se incluye el archivo con la clase sesionManager
require_once('../controller/session_manager.php');
SessionManager::initSession();
?>


<?php
// Recibir los datos que se enviaron desde index.php
$codigo = $_POST['codigo'];
$descripcion = $_POST['descripcion'];

// Añadir los datos al array de productos en la sesión
if (!isset($_SESSION['productos'])) {
  $_SESSION['productos'] = array();
}
array_push($_SESSION['productos'], array('codigo' => $codigo, 'descripcion' => $descripcion));

// Mostrar los productos que se han añadido al carrito
echo "<h1>Productos en el carrito:</h1>";
if (isset($_SESSION['productos'])) {
  foreach ($_SESSION['productos'] as $producto) {
    echo "<p>Código: " . $producto['codigo'] . ", Descripción: " . $producto['descripcion'] . "</p>";
  }
} else {
  echo "<p>No hay productos en el carrito.</p>";
}
?>




    
</body>
</html>