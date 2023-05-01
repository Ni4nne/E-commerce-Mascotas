<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Veterinario</title>
  <link rel="stylesheet" href="./css/veterinario.css">
</head>

<body>
<?php require('header1.php');?>

    <div class="container mt-5 p-5">
        <div id="contenido" class="row">
            <div class="col-md-6 agregar-cita mx-auto">
                <form id="nueva-cita" action="../model/registrar_agenda.php" method="post">
                    <legend class="mb-4"> Introduce los datos: </legend>
                    <div class="form-group row">
                        <label class="col-sm-4 col-lg-4 col-form-label">Nombre de tu Mascota:</label>
                        <div class="col-sm-8 col-lg-8">
                            <input type="text" id="mascota" name="mascota" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-lg-4 col-form-label">Nombre propietario:</label>
                        <div class="col-sm-8 col-lg-8">
                            <input type="text" id="propietario" name="propietario" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-lg-4 col-form-label">Teléfono:</label>
                        <div class="col-sm-8 col-lg-8">
                            <input type="tel" id="telefono" name="telefono" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-lg-4 col-form-label">Fecha:</label>
                        <div class="col-sm-8 col-lg-8">
                            <input type="date" id="fecha" name="fecha" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 col-lg-4 col-form-label">Hora:</label>
                        <div class="col-sm-8 col-lg-8">
                            <input type="time" id="hora" name="hora" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 col-lg-4 col-form-label">Síntomas:</label>
                        <div class="col-sm-8 col-lg-8">
                            <textarea id="sintomas" name="sintomas" class="form-control"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                            <button type="submit" class="btn btn-success w-100 d-block">Crear Nueva Cita</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
<?php require('footer.php');?>
</body>
</html>