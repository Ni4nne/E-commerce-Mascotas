<?php
//Se incluye el archivo con la clase sesionManager
require_once('../controller/session_manager.php');
SessionManager::initSession();

//Se cierra la sesión
SessionManager::closeSession();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="stylesheet" href="./css/logout.css">
</head>

<body>
    
    <h1> Esperamos volver a verte muy pronto! </h1>
    
    <div class="contenedor">
        <img src="./images/mascotas-pets.jpg" alt="Logo" class="index">
    </div>


    


</body>

</html>