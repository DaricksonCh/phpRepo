<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>aGUACATE</title>
    <style>
      .center-buttons {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.center-buttons button {
  display: block;
  width: 300px;
  height: 100px;
  font-size: 18px;
  margin-bottom: 20px;
}
a{
  text-decoration: none;
}
    </style>
  </head>
  <body>
    <div class="container">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
          <img src="aguacate.png" alt="" width="50" height="44" class="d-inline-block align-text-center">
          Aguacate
          </a>
        </div>
      </nav>
    </div>
      <div class="container mt-5">
  <h1 class="text-center">Interfaz de Admin</h1>
  <div class="center-buttons">
    <a href="register.php"><button class="btn btn-primary">Registro de Cliente</button></a>
    <a href="delete.php"><button class="btn btn-warning">Registrar Auto</button></a>
    <a href="verCliente.php"><button class="btn btn-info">Ver todos los Clientes</button></a>
    <a href="delete.php"><button class="btn btn-danger">Salida de Clientes</button></a>
  </div>
</div>


