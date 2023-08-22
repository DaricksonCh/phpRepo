<?php
require_once("Cliente.php");
require_once("Vehiculo.php");

$tuObjetoCliente = new Cliente();

$clientes = $tuObjetoCliente->getClientes();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
        .center-div {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }
        .custom-card {
            background-color: #4CAF50;
            padding: 20px;
            border-radius: 15px;
        }

        .custom-input {
            margin-bottom: 10px;
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

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 center-div">
            <div class="card custom-card">
                <div class="card-body">
                    <h5 class="card-title text-white">Formulario</h5>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 custom-input">
                                    <label for="placa" class="form-label text-white">Placa</label>
                                    <input type="text" class="form-control" id="placa">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 custom-input">
                                    <label for="marca" class="form-label text-white">Marca</label>
                                    <input type="text" class="form-control" id="marca">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 custom-input">
                                    <label for="color" class="form-label text-white">Color</label>
                                    <input type="text" class="form-control" id="color">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 custom-input">
                                    <label for="cliente" class="form-label text-white">Elegir Cliente</label>
                                    <select class="form-select" id="cliente">
                                        <option value="" disabled selected>Selecciona un cliente</option>
                                        <?php
                                        foreach ($clientes as $cliente) {
                                            echo '<option value="' . $cliente['id'] . '">' . $cliente['nombre'] . ' - ' . $cliente['cedula'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary float-end">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>




