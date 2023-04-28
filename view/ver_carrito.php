<?php
//Se incluye el archivo con la clase sesionManager
require_once('../controller/session_manager.php');
SessionManager::initSession();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cesta</title>
</head>
<body>
    <h1> Has comprado los siguientes productos: </h1>
</body>
</html>