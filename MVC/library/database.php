<?php

/**
 * \file database.php
 * \author Alejandro Piñan Roescher
 * \date 20/03/2019
 * \brief PostgreSQL driver to connect to the database and interact with it.
 *
 */

/**
* \class Database
* \brief 
**/
class Database{

	private $connection;      /** \brief connection resource */

	private $pgsql_host;      /** \brief DB host */
	private $pgsql_port;      /** \brief DB port */
	private $pgsql_database;  /** \brief DB */
	private $pgsql_user;      /** \brief DB user */
	private $pgsql_password;  /** \brief DB password*/

	/**
	* \fn function __construct()
	* \brief The class constructor
	*
	* The constructor initializes the parameters to connect to the database and connects with it.
	* Open a connection to a PostgreSQL database. Returns a connection resource that is necessary for 
	* other functions for PostgreSQL.
	**/
	function __construct(){

		$this->pgsql_host = constant('HOST');
		$this->pgsql_port = constant('PORT');
		$this->pgsql_database = constant('DB');
		$this->pgsql_user = constant('USER');
		$this->pgsql_password = constant('PASSWORD');
		
		$this->connection = pg_pconnect("host=".$this->pgsql_host." port=".$this->pgsql_port." dbname=".$this->pgsql_database." user=".$this->pgsql_user." password=".$this->pgsql_password)
								or false;
	}

	/**
	* \function execute($sql)
	* \brief Executes the query on the specified database connection. 
	* \param[in] $sql The sql to execute
	* \return $result The execute result, false if error
	**/
	function execute($sql){

		$result = pg_query($sql) or false;
		return $result;
	}

	/**
	* \function connected()
	* \brief Check the connection to the database
	* \param[in] void
	* \return True if is connected, or false if is not connected
	**/	
	function connected(){

		if (is_bool($this->connection)) return false;
		return true;
	}

}

?>