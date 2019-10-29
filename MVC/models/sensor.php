<?php 
/**
 * \file sensor.php
 * \author Alejandro Piñan Roescher
 * \date 20/03/2019
 * \brief class Sensor
 *
 * This class implements the data that the model needs
 */

/**
* \class Sensor
**/
Class Sensor{

	public $id;

	public $hall;
	public $fieldstrength;
	public $humedad;
	public $uv;
	public $luz_ambiente;
	public $bateria;
	public $presion;
	public $sonido;
	public $temperatura;
	public $ec02;
	public $tvoc;
	
	public $fecha;
	public $hora;

	public $devEUI;
	public $fCnt;
	public $fPort;
	public $rxInfo_gatewayID;
	public $rxInfo_loRaSNR;
	public $rxInfo_rssi;
	public $txfrec;
	public $txdr;


}


?>