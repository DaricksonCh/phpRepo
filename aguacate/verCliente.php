<?php
require_once("Cliente.php");
require_once("Vehiculo.php");


$tuObjetoCliente = new Cliente();
$tuObjetoVehiculo = new Vehiculo(); 

$clientes = $tuObjetoCliente->getClientes();
$vehiculos = $tuObjetoVehiculo->getAutos();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    a:hover{
      color: #fff;
    }
    .btn-editar {
    text-decoration: none;
    color: #fff; 
    background-color: #ffc107; 
    padding: 5px 10px;
    border-radius: 4px; 
    }

    .btn-editar:hover {
      background-color: #ff9800; 
    }

  </style>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
          <img src="aguacate.png" alt="" width="50" height="44" class="d-inline-block align-text-center">
          Aguacate
          </a>
        </div>
    </nav>
</div>


<div class="container mt-5">
  <h2 class="text-center">Lista de Clientes y Vehículos</h2>
  <h3>Piso 1</h3>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Cédula</th>
        <th>Placa</th>
        <th>Marca</th>
        <th>Color</th>
        <th colspan="2" class="text-center">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php
$maxCount = max(count($clientes), count($vehiculos)); // Encuentra la cantidad máxima de registros entre clientes y vehículos

for ($i = 0; $i < $maxCount; $i++) {
  echo '<tr>';
  echo '<td>' . ($i + 1) . '</td>'; // Contador de fila
  echo '<td>' . ($i < count($clientes) ? $clientes[$i]['nombre'] : '') . '</td>';
  echo '<td>' . ($i < count($clientes) ? $clientes[$i]['cedula'] : '') . '</td>';
  echo '<td>' . ($i < count($vehiculos) ? $vehiculos[$i]['placa'] : '') . '</td>';
  echo '<td>' . ($i < count($vehiculos) ? $vehiculos[$i]['marca'] : '') . '</td>';
  echo '<td>' . ($i < count($vehiculos) ? $vehiculos[$i]['color'] : '') . '</td>';
  echo '<td class="text-center"><a class="btn-editar" href="editar.php?id=' . ($i + 1) . '"><i class="fas fa-edit"></i> Editar</a></td>';
  echo '<td class="text-center"><button class="btn btn-danger"><i class="fas fa-trash"></i> Eliminar</button></td>';
  echo '</tr>';
}

      ?>
    </tbody>
  </table>
</div>



<a href=""></a>

<div class="container mt-5">
  <h2 class="text-center">Lista de Clientes</h2>
  <h3>Piso 2</h3>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Cédula</th>
        <th>Placa</th>
        <th>Marca</th>
        <th>Color</th>
        <th colspan="2" class="text-center">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td class="text-center">
          <button class="btn btn-warning"><i class="fas fa-edit"></i> Editar</button>
        </td>
        <td class="text-center">
          <button class="btn btn-danger"><i class="fas fa-trash"></i> Eliminar</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<div class="container mt-5">
  <h2 class="text-center">Lista de Clientes</h2>
  <h3>Piso 3</h3>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Cédula</th>
        <th>Placa</th>
        <th>Marca</th>
        <th>Color</th>
        <th colspan="2" class="text-center">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td class="text-center">
          <button class="btn btn-warning"><i class="fas fa-edit"></i> Editar</button>
        </td>
        <td class="text-center">
          <button class="btn btn-danger"><i class="fas fa-trash"></i> Eliminar</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<div class="container mt-5">
  <h2 class="text-center">Lista de Clientes</h2>
  <h3>Piso 4</h3>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Cédula</th>
        <th>Placa</th>
        <th>Marca</th>
        <th>Color</th>
        <th colspan="2" class="text-center">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td class="text-center">
          <button class="btn btn-warning"><i class="fas fa-edit"></i> Editar</button>
        </td>
        <td class="text-center">
          <button class="btn btn-danger"><i class="fas fa-trash"></i> Eliminar</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>