<?php 

/**
 * \file view.php
 * \author Alejandro Piñan Roescher
 * \date 20/03/2019
 *  
 * This class implements the common things for all the Views
 */


/**
* \class View
* \brief 
**/
class View{

	/**
	* \fn function __construct()
	* \brief The class constructor
	*
	**/	
	public function __construct(){
		
	}

	/**
	* \fn function render($nombre)
	* \brief render the view
	* \param[in] $name The view to by render
	* \return void
	*
	* This function render the view passed by parameter
	**/	
	public function render($view_name){
		require('views/' . $view_name . '.php');
	}

}

?>