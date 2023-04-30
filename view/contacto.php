<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto</title>
  <link rel="stylesheet" href="./css/contacto.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
<?php require('header1.php');?>
<div class="container"> 
    <div class="row"> 
        <div class="col-md-12"> 
            <div class="well well-sm"> 
                <form class="form-horizontal" action="../model/contact_manager.php" method= "post"> 
                        <legend class="text-center header">Contáctanos: </legend> 
                        <div class="form-group"> 
                            <span class="col-md-1 col-md-offset- 2 text-center"><i class="fa fa-user bigicon"></i></span> 
                            <div class="col-md-8"> 
                                <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control"> 
                            </div> 
                        </div>
                        
                        <div class="form-group"> 
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span> 
                            <div class="col-md-8"> 
                                <input id="email" name="email" type="email" placeholder="Correo Electrónico" class="form-control"> 
                            </div> 
                        </div> 
                        
                         <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span> <div class="col-md-8"> 
                                <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Ingrese aquí su mensaje.". filas="7"></textarea> 
                            </div> 
                        </div> 

                        <input type="submit" value="Enviar">
                </form>
<br><br>
            </div> 
        </div> 
    </div> 
</div>
</body>
<?php require('footer.php');?>
</html>