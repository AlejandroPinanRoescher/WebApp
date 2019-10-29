<?php 

session_start();
/**
 * \file enviar.php
 * \author Alejandro Piñan Roescher
 * \date 20/03/2019
 * \brief class Inicio extends Controller
 *
 * This class implements the enviar controller responsible for the enviar view, used to configure  
 * downlink the LoRaWAN device.
 */


/**
* \class Enviar
* \brief Implements the Enviar controller
**/
class Enviar extends Controller{

	
	public function __construct(){

		parent::__construct();

		$this->view->mensajeToken = "";
		$this->view->mensajeTiempoEnvio = "";
		$this->view->mensajeSensoresEnvio = "";
		$this->view->buttonsState = ""; //disabled
		$this->view->activoE = "";

		$this->view->mensajeToken = $_SESSION["token"];
		//$this->view->mensaje = $_SESSION["token"];
	}

	public function render(){
		$this->view->mensajeToken = $_SESSION["token"];
		//$this->view->mensaje = $_SESSION["token"];
		//$this->view->buttonsState = "";
		$this->view->activoE = "active";
		$this->view->render('enviar/index');
	}	

	public function obtenerToken(){
		
		$_SESSION["token"]= "";	
		if(isset($_POST['nombre'])){

			$nombre = $_POST['nombre'];
			$apellido = $_POST['password'];

			$token = $this->model->getToken($nombre, $apellido);
			$_SESSION["token"]= $token[1];

			if($token[0]){
				$this->view->buttonsState = "";
			}
		}
		$this->render();
	}	

	public function configurarTiempoEnvio(){

		if(isset($_POST['horas'])){
			//session_start();
			//$_SESSION["respuesta"]= "";
			$token = $_POST["jwt"];
			$horas = $_POST["horas"];
			$minutos = $_POST["minutos"];
			$tramaHM = 1;

			if($horas < 10 & strlen($horas)== 1){
				$horas = 0 . $horas;
			}
			if($minutos < 10 & strlen($minutos)== 1){
				$minutos = 0 . $minutos;
			}
			$tiempo = base64_encode($tramaHM . $horas . $minutos);

			$result = $this->model->getCurlPost($tiempo, $token);
			$this->view->mensajeTiempoEnvio = 'Downlink para fcont = ' . $result[1];

			if($result[0]){
				$this->model->saveDowlinkRequest($result[1]);
			}
		}
		//$this->view->mensaje = $_SESSION["token"];
		$this->render();

	}

	public function configurarSensoresEnvio(){

		if(isset($_POST['dato11'])){
			//session_start();
			//$_SESSION["respuesta"]= "";
			$token = $_POST["jwt"];
			$UV = $_POST["dato1"];
			$presion = $_POST["dato2"];
			$temperatura = $_POST["dato3"];
			$luzAmbiente = $_POST["dato4"];
			$sonido = $_POST["dato5"];
			$humedad = $_POST["dato6"];
			$bateriaN = $_POST["dato7"];
			$ECO2 = $_POST["dato8"];
			$TCO2 = $_POST["dato9"];
			$hall = $_POST["dato10"];
			$hallMF = $_POST["dato11"];
			$tramaS = 2;

			$sen = chr($tramaS) . chr($UV) . chr($presion) . chr($temperatura) . chr($luzAmbiente) . chr($sonido) . chr($humedad) . chr($bateriaN). chr($ECO2). chr($TCO2) . chr($hall). chr($hallMF);
			//$sensores = base64_encode($sen);
			$sensores = base64_encode($sen);
			
			$result = $this->model->getCurlPost($sensores, $token);
			$this->view->mensajeSensoresEnvio = $result[1];

			if($result[0]){
				$this->model->saveDowlinkRequest($result[1]);
			}
		}
		//$this->view->mensaje = $_SESSION["token"];
		$this->render();

	}
	
}



?>