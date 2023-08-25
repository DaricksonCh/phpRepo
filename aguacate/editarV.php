<?php
require_once("Cliente.php");
require_once("Vehiculo.php");
require_once("conexion.php");

$db = new Db();
$conexion = $db->conexion();
$placa = '';
$marca = '';
$color = '';


if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

        $sql = "SELECT placa, marca, color FROM autos WHERE id = :id";
        $consulta = $conexion->prepare($sql);
        $consulta->bindParam(':id', $id, PDO::PARAM_INT);
        $consulta->execute();
        $vehiculo = $consulta->fetch(PDO::FETCH_ASSOC);

        if ($vehiculo) {
            $placa = $vehiculo['placa'];
            $marca = $vehiculo['marca'];
            $color = $vehiculo['color'];
        }
    }
if(isset($_POST['guardar'])) {
    try{
        $placa  = $_POST['placa'];
        $marca  = $_POST['marca'];
        $color  = $_POST['color'];
        $vehiculo = new Vehiculo();
        $vehiculo->updateVehiculo($placa, $marca, $color);
    }catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
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
    <h1 class="text-center display-4 mb-5">Editando Vehiculo</h1>
    <form action="" method="POST">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="placa">Placa</label>
                    <input type="text" class="form-control" id="placa" name="placa" placeholder="Ingrese la placa" value="<?php echo $placa ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="marca">Marca</label>
                    <input type="text" class="form-control" id="marca" name="marca" placeholder="Ingrese la marca" value="<?php echo $marca ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="color">Color</label>
                    <input type="text" class="form-control" id="color" name="color" placeholder="Ingrese el color" value="<?php echo $color ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary" name="guardar" style="margin-right: 5px;">Guardar Cambios</button>
                <a href="verCliente.php" class="btn btn-secondary">Volver</a>
            </div>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>




