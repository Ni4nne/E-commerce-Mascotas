<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Veterinario</title>
  <link rel="stylesheet" href="./css/veterinario.css">
  <link rel="stylesheet" href="./css/consulta_agenda.css">
</head>

<body>
<?php require('header1.php');?>

<div class="conten">
<br><br>

  <div class="tabla">
    <?php include('../model/consulta_agenda.php');?>
  </div>
    <br><br><br><br><br>

  <div class="pie">
    <?php include('footer.php');?>
  </div>
</div>


</body>


</html>
