<?php 
/**
 * \file controller.php
 * \author Alejandro Piñan Roescher
 * \date 20/03/2019
 * \brief class Controller
 *
 * This class implements the common things for all the Controllers:Associates the corresponding 
 * controller with the corresponding view, and if necessary load the model 
 */


/**
* \class Controller
* \brief Parent controller: Parent of all controllers
**/
class Controller{

	/**
	* \fn function __construct()
	* \brief The class constructor
	*
	* This function creates the view associated with the controller.
	**/
	public function __construct(){
		
		$this->view = new View();
	}

	/**
	* \fn function loadModel($model)
	* \brief This function load the model associated with the controller.
	* \param[in] $model The model to by load
	* \return void
	**/
	public function loadModel($model){
		$url = 'models/'.$model.'model.php';
		if(file_exists($url)){
			require($url);
			$modelName = $model.'Model';
			$this->model = new $modelName();
		}
	}
	
}

?>