<?php

    class Cliente extends Controllers{

        public function __construct()
        {
            parent::__construct();
        }
        public function cliente($idCliente)
        {
            echo "Hola desde cliente".$idCliente;
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
                    $response = [
                        'status'=>true,
                        'msg'=>'Datos guardados con exito'
                    ];
                    $code = 200;
                }else{
                    $response = [
                        'status'=>false,
                        'msg'=>'Error en la solicitud del metodo: '. $method . ' cambie su tipo de metodo a POST'
                    ];
                    $code = 400;
                }
                jsonResponse($response,$code);
            }catch(Exception $e){
                echo "ERROR en el proceso :registro ".$e->getMessage();
            }
        }
        public function clientes()
        {
            echo "hola desde registro";
        }
        public function actualizar()
        {
            echo "hola desde registro";
        }
        public function eliminar()
        {
            echo "hola desde registro";
        }
    }


?>