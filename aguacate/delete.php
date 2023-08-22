<?php
require_once("Cliente.php");
require_once("Vehiculo.php");

$tuObjetoCliente = new Cliente();
$tuObjetoVehiculo = new Vehiculo(); 

$clientes = $tuObjetoCliente->deleteCliente($cedula);
$vehiculos = $tuObjetoVehiculo->deleteVehiculo($placa); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
.center-content {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 50vh;
    }

    .search-container {
      text-align: center;
      background-color: #f8f9fa;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
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
  <h2 class="text-center">Salida de Clientes</h2>
  
  <div class="center-content">
    <div class="search-container">
      <h3>Buscar Cliente</h3>
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Placa o Cédula">
      </div>
      <button class="btn btn-primary btn-lg">Generar Recibo</button>
    </div>
  </div>
</div>
<?php
require_once("Cliente.php");
require_once("Vehiculo.php");

if (isset($_POST['buscar'])) {
  $tuObjetoCliente = new Cliente();
  $tuObjetoVehiculo = new Vehiculo();

  $busqueda = $_POST['busqueda'];

  if (is_numeric($busqueda)) {
  
    $eliminado = $tuObjetoCliente->deleteCliente((int)$busqueda);
  } else {
  
    $eliminado = $tuObjetoVehiculo->deleteVehiculo($busqueda);
  }

  if ($eliminado) {
    echo "Registro eliminado exitosamente.";
  } else {
    echo "No se pudo eliminar el registro.";
  }

}
<div class="container mt-5">
  <h2 class="text-center">Salida de Clientes</h2>
  <div class="center-content">
    <div class="search-container">
      <h3>Buscar Cliente</h3>
      <form action="eliminar.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="busqueda" placeholder="Placa o Cédula">
        </div>
        <button type="submit" class="btn btn-primary btn-lg" name="buscar">Buscar y Eliminar</button>
      </form>
    </div>
  </div>
</div>

?>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>