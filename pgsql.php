<?php

/**
* \class DataBase
* Controlador de PostgreSQL
**/
class DataBase
{

	private $conexion;
	
	function __construct()
	{
		include 'pgsql_settings.php';
		
		$this->conexion = pg_pconnect("host=".$pgsql_host." port=".$pgsql_port." dbname=".$pgsql_database." user=".$pgsql_user." password=".$pgsql_password)
								or false;
	}

	function execute($sql)
	{
		$result = pg_query($sql) or false;
		return $result;
	}
	
	function conectado()
	{
		if (is_bool($this->conexion)) return false;
		return true;
	}

}

?>