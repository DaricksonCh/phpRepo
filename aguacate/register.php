<?php
/* relaciones */
require_once("conexion.php");
require_once("Cliente.php");
require_once("Vehiculo.php");


$conexion = new Db(); 
$pdo = $conexion->conexion(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
		.registration-container {
	  display: flex;
	  align-items: center;
	}

	.registration-image {
	  flex: 1;
	  padding: 20px;
	}

	.registration-form {
	  flex: 2;
	  padding: 20px;
	}

	.registration-form .form-group {
	  margin-bottom: 20px;
	}

	.registration-form .btn {
	  float: right;
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
  <h1 class="text-center">Registrar Cliente</h1>
  
  <div class="registration-container">
	<div class="registration-image">
	  <img src="_13a8ba10-010e-489c-b7bc-f9cb647d1721.jpeg" alt="User Image" class="img-fluid">
	</div>
	<div class="registration-form">

	  <form method="POST" action="">
		<div class="form-group">
		  <label for="nombre">Nombre de Cliente</label>
		  <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre" name="nombre">
		</div>
		<div class="form-group">
		  <label for="cedula">Cédula de Cliente</label>
		  <input type="text" class="form-control" id="cedula" placeholder="Ingrese la cédula" name="cedula">
		</div>
		<div class="form-group">
		  <label for="placa">Placa del Vehículo</label>
		  <input type="text" class="form-control" id="placa" placeholder="Ingrese la placa" name="placa">
		</div>
		<div class="form-group">
		  <label for="marca">Marca del Vehículo</label>
		  <input type="text" class="form-control" id="marca" placeholder="Ingrese la marca" name="marca">
		</div>
		<div class="form-group">
		  <label for="color">Color del Vehículo</label>
		  <input type="text" class="form-control" id="color" placeholder="Ingrese el color" name="color">
		</div>
		<button type="submit" class="btn btn-primary" name="btn">Registrar</button>
	  </form>
	</div>
  </div>
</div>
<?php
if(isset($_POST['btn'])) {
	$nombre = $_POST['nombre'];
	$cedula = $_POST['cedula'];
	$placa = $_POST['placa'];
	$marca = $_POST['marca'];
	$color = $_POST['color'];
	$cliente = new Cliente();
	$vehiculo = new Vehiculo();

	$cliente->insertCliente($cedula, $nombre);
	$vehiculo->insertAuto($cliente,$placa, $marca, $color);
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>




