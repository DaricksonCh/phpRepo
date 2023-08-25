  <?php
  require_once("Cliente.php");
  require_once("Vehiculo.php");
  require_once("Parqueadero.php");


  $tuObjetoCliente = new Cliente();
  $tuObjetoVehiculo = new Vehiculo(); 

  $clientes = $tuObjetoCliente->getClientes();
  $vehiculos = $tuObjetoVehiculo->getAutos(); 
  $tuObjetoVehiculo = new Vehiculo();
  $horaSalida = "2023-08-23 14:30:00"; 
  
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
      .nav-link:hover {
        background-color: #007BFF; 
        color: #fff; 
        border-radius: 5px; 
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
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
            </ul>
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
        <th>Hora de Entrada</th>
        <th>Placa</th>
        <th>Marca</th>
        <th>Color</th>
        <th colspan="2" class="text-center">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $totalRecords = max(count($clientes), count($vehiculos));

      for ($i = 0; $i < $totalRecords; $i++) {
        echo '<tr>';
        echo '<td>' . ($i + 1) . '</td>';
        if ($i < count($clientes) && isset($clientes[$i]['nombre']) && isset($clientes[$i]['cedula'])) {
            echo '<td>' . $clientes[$i]['nombre'] . '</td>';
            echo '<td>' . $clientes[$i]['cedula'] . '</td>';
            echo '<td>' . date("Y-m-d H:i:s") . '</td>';
        } else {
            echo '<td></td>';
            echo '<td></td>';
            echo '<td></td>';
        }
        
        if ($i < count($vehiculos) && isset($vehiculos[$i]['placa']) && isset($vehiculos[$i]['marca']) && isset($vehiculos[$i]['color'])) {
            echo '<td>' . $vehiculos[$i]['placa'] . '</td>';
            echo '<td>' . $vehiculos[$i]['marca'] . '</td>';
            echo '<td>' . $vehiculos[$i]['color'] . '</td>';
        } else {
            echo '<td></td>';
            echo '<td></td>';
            echo '<td></td>';
        }
        
        echo '<td class="text-center"><a class="btn-editar" href="editar.php?id=' . $clientes[$i]['id'] . '"><i class="fas fa-edit"></i> Editar Cliente</a></td>';
        echo '<td class="text-center"><a class="btn-editar" href="editarV.php?id=' . $vehiculos[$i]['id'] . '"><i class="fas fa-edit"></i> Editar Vehiculo</a></td>';
        echo '</tr>';
    }    
      ?>
    </tbody>
  </table>
</div>



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