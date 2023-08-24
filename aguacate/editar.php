<?php
require_once("Cliente.php");
require_once("Vehiculo.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    <h1 class="text-center display-4 mb-5">Editando cliente</h1>
    <form action="" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="cedula">Cédula</label>
                    <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Ingrese la cédula">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="placa">Placa</label>
                    <input type="text" class="form-control" id="placa" name="placa" placeholder="Ingrese la placa">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="marca">Marca</label>
                    <input type="text" class="form-control" id="marca" name="marca" placeholder="Ingrese la marca">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="color">Color</label>
                    <input type="text" class="form-control" id="color" name="color" placeholder="Ingrese el color">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>




