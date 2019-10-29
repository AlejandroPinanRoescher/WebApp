<?php 
/**
 * \file grafica.php
 * \author Alejandro Piñan Roescher
 * \date 20/03/2019
 * \brief class Grafica extends Controller
 *
 * This class implements the grafica controller responsible for the grafica view.
 */
class Grafica extends Controller{

	/**
	* \fn function __construct()
	* \brief The class constructor
	*
	* This function call the parent Controller to get its view, create the sensores array and message 
	* variables 
	**/
	public function __construct(){

		parent::__construct();
		$this->view->activoG = "";
		//$this->view->mensaje = "";

		$this->view->temperature = [];
		$this->view->humidity    = [];
		$this->view->pressure    = [];
		$this->view->sound       = [];
		$this->view->alight      = [];
		$this->view->fieldStr    = [];
		$this->view->ec02        = [];
		$this->view->tvoc        = [];
		$this->view->batery      = [];
		$this->view->rxRssi      = [];
		$this->view->txData      = [];
	}

	/**
	* \fn function render()
	* \brief render the view
	*
	* This function gives value to the sensores array and the message variable,activoG, and loads the 
	* grafica view
	**/	
	public function render(){
		
		$this->view->temperature = $this->model->getTemperature();
		$this->view->humidity    = $this->model->getHumidity();
		$this->view->pressure    = $this->model->getPressure();
		$this->view->sound       = $this->model->getSound();
		$this->view->alight      = $this->model->getAlight();
		$this->view->fieldStr    = $this->model->getFieldStr();
		$this->view->ec02        = $this->model->getEc02();
		$this->view->tvoc        = $this->model->getTvoc();
		$this->view->batery      = $this->model->getBatery();
		$this->view->rxRssi      = $this->model->getRxData();
    $this->view->txData      = $this->model->getTxData();
	   
		$this->view->activoG = "active";
		$this->view->render('grafica/index');
	}	

}

?>
