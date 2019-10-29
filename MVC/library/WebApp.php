<?php 

/**
 * \file WebApp.php
 * \author Alejandro Piñan Roescher
 * \date 20/03/2019
 *  
 * This class is responsible for starting the web application. 
 * It load by the URL the corresponding controller. 
 */


/**
* \class WebApp
* \brief 
**/
class WebApp{

	/**
	* \fn function __construct()
	* \brief The class constructor
	*
	* This function load the required controller by the URL
	**/	
	public function __construct(){

		$url = isset($_GET['url']) ? $_GET['url']: null;
		$url = rtrim($url, '/');
		$url = explode('/', $url );

		$existentcontrollers= array(
									'enviar'=>['obtenerToken', 'configurarTiempoEnvio', 'configurarSensoresEnvio']
										);//añadir

		$controllerName = $url[0];


		if(empty($url[0])){//When entering without defining a controller
			$archivoController = 'controllers/inicio.php';//Initial controller
			require_once($archivoController);
			$controller = new Inicio();
			//$controller->loadModel('inicio');
			$controller->render();
			return false;
		}
		$archivoController = 'controllers/'.$url[0].'.php';//Assign the controller

		if(file_exists($archivoController)){//Check if the file exists
			require_once($archivoController);
			//Initialize the controller and load the model
			$controller = new $url[0];
			$controller->loadModel($url[0]);
			$nparam = sizeof($url);
		
			if($nparam > 1){
				if($nparam >2){
					$param = [];
					for($i = 2; $i < $nparam; $i++){
						array_push($param, $url[$i]);
					}
					$controller->{$url[1]}($param);
				}else{
					if(in_array($url[1], $existentcontrollers[$controllerName])){//yooo
						$controller->{$url[1]}();
					}else{//yoo
						require_once('controllers/errores.php');//yoo
						$controller = new Errores();//yoo
					}//yooo
				}
			}else{
				$controller->render();
			}
		}else{
			require_once('controllers/errores.php');
			$controller = new Errores();
		}
	}
}

?>

