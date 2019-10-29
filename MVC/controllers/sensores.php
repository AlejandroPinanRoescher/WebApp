<?php 
/**
 * \file sensores.php
 * \author Alejandro Piñan Roescher
 * \date 20/03/2019
 * \brief class Sensores extends Controller
 *
 * This class implements the Sensores controller responsible for the Sensores view
 */

/**
* \class Sensores
* \brief Implements the Sensores controller
**/
class Sensores extends Controller{

	/**
	* \fn function __construct()
	* \brief The class constructor
	*
	* This function call the parent Controller to get its view, create the sensores array and message 
	* variables 
	**/
	public function __construct(){

		parent::__construct();

		$this->view->sensores = [];
		$this->view->activoS = "";
	}

	/**
	* \fn function render()
	* \brief render the view
	*
	* This function gives value to the sensores array and the message variable,activoS, and loads the 
	* Sensor view
	**/	
	public function render(){

		$sensores = $this->model->get();
		if($sensores != Null){
			$this->view->sensores = $sensores;
		}else{
			$this->view->mensaje = "Error al cargar los datos o no hay datos para mostrar";
		}
		$this->view->activoS = "active";
		$this->view->render('sensores/index');
	}	

	/**
	* \fn function verDetalle($param = null)
	* \brief render the view
	*
	* This function gives value to the sensores array and the message variable,activoS, and loads the 
	* Sensor detail view
	**/	
	public function verDetalle($param = null){
		//var_dump($param);
		$idSensores = $param[0];
		$sensor = $this->model->getDetalleById($idSensores);

		if($sensor != null){
			$this->view->sensor = $sensor;
			$this->view->mensaje = "";
		}else{
			$this->view->mensaje = "Error al cargar los datos";
		}
		$this->view->render('sensores/detalle');
	}	

	/**
	* \fn function eliminarDatos($param = null)
	* \brief Delete the selected row through the id
	* \param $param 
	*
	* This function delete the selected row through the id
	**/	
	public function eliminarDatos($param = null){

		$id = $param[0];

		if($this->model->delete($id)){
			$this->view->mensaje = "Datos eliminados correctamente para id " .$id;
		}else{
			$this->view->mensaje = "No se pudieron eliminar los datos";
		}
			$this->render();
	}	

}

?>