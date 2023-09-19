<?php

class Cliente extends Controllers{

public function __construct()
{
		parent::__construct();
}
public function registro()
{
	try{
			$method = $_SERVER['REQUEST_METHOD'];
			$response = [];
			if($method == "POST"){
					$_POST = json_decode(file_get_contents('php://input'),true);
					if(empty($_POST['cedula'])){
							$response = [
									'status'=>false,
									'msg'=>'Error, cedula es requerida'
							];
							jsonResponse($response,200);
							die();
					}
					if(!testString($_POST['nombres'])){
							$response = [
									'status'=>false,
									'msg'=>'Error, los nombres son requeridos'
							];
							jsonResponse($response,200);
							die();
					}
					if(!testString($_POST['apellidos'])){
							$response = [
									'status'=>false,
									'msg'=>'Error, los apellidos son requeridos'
							];
							jsonResponse($response,200);
							die();
					}
					if(!testEntero($_POST['telefono'])){
							$response = [
									'status'=>false,
									'msg'=>'Error, los telefono son requeridos'
							];
							jsonResponse($response,200);
							die();
					}
					if(!testEmail($_POST['email'])){
							$response = [
									'status'=>false,
									'msg'=>'Error, el email es requeridos'
							];
							jsonResponse($response,200);
							die();
					}
					if(empty($_POST['direccion'])){
							$response = [
									'status'=>false,
									'msg'=>'Error, la direccion es requeridos'
							];
							jsonResponse($response,200);
							die();
					}
					$strCedula = $_POST['cedula'];
					$strNombres = ucwords(strtolower($_POST['nombres']));
					$strApellidos = ucwords(strtolower($_POST['apellidos']));
					$intTelefono = $_POST['telefono'];
					$strEmail = strtolower($_POST['email']);
					$strDireccion = $_POST['direccion'];
					$strNit = !empty($_POST['nit']) ? strClean($_POST['nit']) : "";
					$strNomFiscal = !empty($_POST['nombreFiscal']) ? strClean($_POST['nombreFiscal']) : "";
					$strDirFiscal = !empty($_POST['direccionFiscal']) ? strClean($_POST['direccionFiscal']) : "";

					$request = $this->model->setCliente($strCedula,
					$strNombres,
					$strApellidos,
					$intTelefono,
					$strEmail,
					$strDireccion,
					$strNit,
					$strNomFiscal,
					$strDirFiscal);

					if($request > 0){
						$arrCliente = [
							'idCliente'=>$request,
							'cedula'=>$strCedula,
							'nombres'=>$strNombres,
							'apellidos'=>$strApellidos,
							'telefono'=>$intTelefono,
							'email'=>$strEmail,
							'direccion'=>$strEmail,
							'nit'=>$strNit,
							'nombreFiscal'=>$strNomFiscal,
							'direccionFiscal'=>$strDirFiscal
						];
						$response = [
							'status'=>true,
							'msg'=>'Datos guardados con exito',
							'data'=>$arrCliente
						];
					}else{
						$response = [
							'status'=>false,
							'msg'=>'La cedula o emial ya existentes',
						];
					}
					$code = 200;
			}else{
					$response = [
							'status'=>false,
							'msg'=>'Error en la solicitud del metodo: '. $method . ' cambie su tipo de metodo a POST'
					];
					$code = 400;
			}
			jsonResponse($response,$code);
			die();
	}catch(Exception $e){
			echo "ERROR en el proceso :registro ".$e->getMessage();
	}
}
public function update($idCliente)
{
	try{
			$method = $_SERVER['REQUEST_METHOD'];
			$response = [];
			if($method == "PUT"){
				
					$_PUT = json_decode(file_get_contents('php://input'), true);


					$intIdCliente = $idCliente;
					$strCedula = $_PUT['cedula'];
					$strNombres = ucwords(strtolower($_PUT['nombres']));
					$strApellidos = ucwords(strtolower($_PUT['apellidos']));
					$intTelefono = $_PUT['telefono'];
					$strEmail = strtolower($_PUT['email']);
					$strDireccion = $_PUT['direccion'];
					$strNit = !empty($_PUT['nit']) ? strClean($_PUT['nit']) : "";
					$strNomFiscal = !empty($_PUT['nombreFiscal']) ? strClean($_PUT['nombreFiscal']) : "";
					$strDirFiscal = !empty($_PUT['direccionFiscal']) ? strClean($_PUT['direccionFiscal']) : "";

					$request = $this->model->updateCliente(
						$idCliente,
						$strCedula,
						$strNombres,
						$strApellidos,
						$intTelefono,
						$strEmail,
						$strDireccion,
						$strNit,
						$strNomFiscal,
						$strDirFiscal
				);
					if ($request !== false) {
							$response = [
									'status' => true,
									'msg' => 'Datos actualizados con éxito'
							];
					} else {
							$response = [
									'status' => false,
									'msg' => 'Error al actualizar los datos'
							];
					}
					$code = 200;
			} else {
					$response = [
							'status' => false,
							'msg' => 'Error en la solicitud del método: ' . $method . ' cambie su tipo de método a PUT'
					];
					$code = 400;
			}
			jsonResponse($response,$code);
			die();
	}catch(Exception $e){
			echo "ERROR en el proceso :actualizar ".$e->getMessage();
	}
}
public function delete($idCliente)
{
	try{
		$method = $_SERVER['REQUEST_METHOD'];
		$response = [];

		if($method == "DELETE") {
			$request = $this->model->deleteClient($idCliente);
			if($request !== false){
				$response = [
					'status'=>true,
					'msg'=>'Client successfully deleted'
				];
			}else{
				$response = [
					'status'=>false,
					'msg'=>'Client not deleted'
				];
			}
			$code = 200;
		}
		jsonResponse($response,$code);
		die();
	}catch(Exception $e){
		echo "ERROR en el proceso :delete ".$e->getMessage();
	}
}
public function show()
{
	try{
		$method = $_SERVER['REQUEST_METHOD'];
		$response = [];
		if($method == "GET"){
			$request = $this->model->showClients();

			if($request !== false){
				$response = [
					'status'=>true,
					'msg'=>'Client all',
					'data' => $request
				];
			}else{
				$response = [
					'status'=>false,
					'msg'=>'Client not all'
				];
			}
			$code = 200;
		}
		jsonResponse($response,$code);
		die();
	}catch(Exception $e){
		echo "ERROR en el proceso :delete ".$e->getMessage();
	}
}

}


?>