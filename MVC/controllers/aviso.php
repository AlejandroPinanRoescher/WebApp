<?php
 
/**
 * \file aviso.php
 * \author Alejandro Piñan Roescher
 * \date 20/03/2019
 * \brief class Inicio extends Controller
 *
 * This class implements the aviso controller responsible for the aviso view.
 */

/**
* \class Aviso
* \brief Implements the aviso controller
**/
class Aviso extends Controller{

	/**
	* \fn function __construct()
	* \brief The class constructor
	*
	* This function call the parent Controller to get its view, create the message variable and pass it 
	* to its view
	* 
	**/
	public function __construct(){
		parent::__construct();
		$this->view->avisos = [];
		$this->view->activoA = "";
	}

	/**
	* \fn function render()
	* \brief render the view
	*
	* This function gives value to the message variable, and loads the aviso view
	**/	
	public function render(){
		$avisos = $this->model->get();
		if($avisos != null){
			$this->view->avisos = $avisos;
		}else{
			$this->view->mensaje = "Error al cargar los avisos o no hay avisos para mostrar" .$id;
		}
		$this->view->activoA = "active";
		$this->view->render('aviso/index');
	}	

	/**
	* \fn function eliminarDatos($param = null)
	* \brief Delete the selected row through the id
	* \param $param 
	*
	* This function delete the selected row through the id
	**/	
	public function eliminarEvento($param = null){
		$id = $param[0];

		if($this->model->delete($id)){
			$this->view->mensaje = "Evento eliminado correctamente para id " .$id;
		}else{
			$this->view->mensaje = "No se pudo eliminar el evento para id " .$id;
		}
			$this->render();
	}	
	
}



?>