<?php 
/**
 * \file inicio.php
 * \author Alejandro Piñan Roescher
 * \date 20/03/2019
 * \brief class Inicio extends Controller
 *
 * This class implements the inicio controller responsible for the inicio view, and does not use 
 * the model simply show the initial view that indicates the purpose of the application
 */

/**
* \class Inicio
* \brief Implements the inicio controller
**/
class Inicio extends Controller{
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

		$this->view->activoM = "";/** \brief activoM Used to highlight the active view in the menu */
	}

	/**
	* \fn function render()
	* \brief render the view
	*
	* This function gives value to the message variable,activoM, and loads the Inicio view
	**/	
	public function render(){
		$this->view->activoM = "active";
		$this->view->render('inicio/index');
	}	

}

?>