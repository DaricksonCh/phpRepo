<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
				<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Home</title>
</head>
<style>
	table{
		justify-content: center;
		align-items: center;
		text-align: center;
	}
	.container-table{
		display: grid;
		justify-content: center;
		align-items: center;
	}
</style>
<body>
  <h1>Página principal Home</h1>
  <p>Nombre página: <?= $data['page_title'] ?> </p>
	<?php
    $ch = curl_init();

    $urlGetClientes = 'http://localhost/phpRepo/championFramework/Cliente/show';

    curl_setopt($ch, CURLOPT_URL, $urlGetClientes);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        $error_msg = curl_error($ch);
        echo "Error al conectarse a la API para obtener clientes";
    } else {
        curl_close($ch);
        $clientes_data = json_decode($response, true);
    }
    ?>
		<div class="container-table">
    <table border="1" class="tablaUsers">
        <thead>
            <tr>
                <th>Cédula</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Dirección</th>
                <th>Nombre Fiscal</th>
                <th>Dirección Fiscal</th>
                <th>Fecha de Creación</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < count($clientes_data['data']); $i++) :
            ?>
                <tr>
                    <td><?php echo $clientes_data['data'][$i]['cedula']; ?></td>
                    <td><?php echo $clientes_data['data'][$i]['nombres']; ?></td>
                    <td><?php echo $clientes_data['data'][$i]['apellidos']; ?></td>
                    <td><?php echo $clientes_data['data'][$i]['telefono']; ?></td>
                    <td><?php echo $clientes_data['data'][$i]['email']; ?></td>
                    <td><?php echo $clientes_data['data'][$i]['direccion']; ?></td>
                    <td><?php echo $clientes_data['data'][$i]['nombreFiscal']; ?></td>
                    <td><?php echo $clientes_data['data'][$i]['direccionFiscal']; ?></td>
                    <td><?php echo $clientes_data['data'][$i]['dateCreated']; ?></td>
                    <td><?php echo $clientes_data['data'][$i]['status']; ?></td>
                </tr>
            <?php
            endfor;
            ?>
        </tbody>
    </table>
		</div>
		<div class="container">	
		<form method="POST">
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Cedula</label>
				<input type="number" class="form-control" name="cedula">
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Nombres</label>
				<input type="text" class="form-control" name="nombres">
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Apellidos</label>
				<input type="text" class="form-control" name="apellidos">
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Telefono</label>
				<input type="number" class="form-control"name="telefono" >
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Email</label>
				<input type="email" class="form-control" name="email">
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Direccion</label>
				<input type="text" class="form-control" name="direccion">
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Nombre Fiscal</label>
				<input type="text" class="form-control" name="nombreFiscal">
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Direccion Fiscal</label>
				<input type="text" class="form-control" name="direccionFiscal">
			</div>
			<button type="submit" class="btn btn-primary" name="btnUser">Submit</button>
		</form>
		</div>
		<?php
			if(isset($_POST['btnUser'])) {
				$cedula = $_POST['cedula'];
				$nombres = $_POST['nombres'];
				$apellidos = $_POST['apellidos'];
				$telefono = $_POST['telefono'];
				$email = $_POST['email'];
				$direccion = $_POST['direccion'];
				$nombreFiscal = $_POST['nombreFiscal'];
				$direccionFiscal = $_POST['direccionFiscal'];
				
			}
		
		?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
