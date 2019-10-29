<?php 

/**
 * \file model.php
 * \author Alejandro Piñan Roescher
 * \date 20/03/2019
 *  
 * This class implements the common things for all the Models: Create the database driver
 */


/**
* \class Model
* \brief 
**/
class Model{

	public $db;/** \brief The database connection resource*/

	/**
	* \fn function __construct()
	* \brief The class constructor
	*
	* This function create the database connection resource for the corresponding model
	**/	
	public function __construct(){
		$this->db = new Database();
	}

}



?>