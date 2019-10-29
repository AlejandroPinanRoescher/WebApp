<?php 
/**
 * \file controller.php
 * \author Alejandro Piñan Roescher
 * \date 20/03/2019
 * \brief class Errores extends Controller
 *
 * This class implements the Errores controller responsible for the Errores view, and does not use 
 * the model simply show the Errores view that indicate and error
 */

/**
* \class Errores
* \brief Implements the Errores controller
**/
class Errores extends Controller{
	/**
	* \fn function __construct()
	* \brief The class constructor
	*
	* This function call the parent Controller to get its view, create the message variable and pass it 
	* to its view, and finaly load the error view
	* 
	**/
	public function __construct(){
		parent::__construct();
		$this->view->mensaje = "Hubo un error en la solicitud o no existe la pagina";
		$this->view->render('errores/index');
	}
	
}


?>