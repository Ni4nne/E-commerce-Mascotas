<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="./css/login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <img src="./images/logos/Logo.png" alt="logo" />
  </div>
  <nav>
    <h1>Accede a tu cuenta</h1>
  </nav>
  <div class="cont">
    <form action="../controller/login_validation.php" method="post">
      <div>  
        <label for="email">Email:</label>
        <input type="email" name="email" required>
      </div>
      
      <div>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" required>
      </div>
      
      <input type="submit" value="Acceder">
    </form>
  </div>

</body>

</html>

