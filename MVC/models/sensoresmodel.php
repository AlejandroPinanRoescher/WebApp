<?php 
/**
 * \file sensoresmodel.php
 * \author Alejandro Piñan Roescher
 * \date 20/03/2019
 * \brief class SensoresModel extends Model
 *
 * This class implements the SensoresModel responsible for loading the data that the sensors controller 
 * sends to the sensors
 */

include_once('models/sensor.php');

/**
* \class SensoresModel
* \brief Implements the SensoresModel 
**/
class SensoresModel extends Model{

	public function __construct(){

		parent::__construct();
	}
	
	public function get(){
		$items = [];

		if($consulta= $this->db->execute("select * from sensores ORDER BY id ASC")){
		
			while($row = pg_fetch_array($consulta, NULL, PGSQL_ASSOC)){

             	$item = new Sensor();

             	$item->id = $row['id'];
             	$item->hall = $row['hall'];
            	$item->fieldstrength = $row['fieldstrength'];
            	$item->humedad = $row['humedad'];
             	$item->uv = $row['uv'];
            	$item->luz_ambiente = $row['luz_ambiiente'];
            	$item->bateria = $row['bateria'];
             	$item->presion = $row['presion'];
            	$item->sonido = $row['sonido'];
            	$item->temperatura = $row['temperatura']; 
             	$item->ec02 = $row['ec02'];
            	$item->tvoc = $row['tvoc'];
            	$item->fecha = $row['fecha'];
            	$item->hora = substr($row['hora'],0,8);

            	array_push($items, $item);
       		}
       		return $items;

		}else{
			return[];
		}
	}

	public function getDetalleById($id){
		$item = new Sensor();

		if($select = $this->db->execute("select * from sensores WHERE id=".$id."")){
			$row = pg_fetch_array($select, NULL, PGSQL_ASSOC);

        	$item->id = $row['id'];
        	$item->devEUI = $row['deveui'];
        	$item->fCnt = $row['fcnt'];
       	 	$item->fPort = $row['fport'];
       	 	$item->txfrec = $row['txfrec'];
        	$item->txdr = $row['txdr'];
       		$item->rxInfo_gatewayID = $row['rxinfo_gatewayid'];
			$item->rxInfo_rssi = $row['rxinfo_rssi'];
			$item->rxInfo_loRaSNR = $row['rxinfo_lorasnr'];
			$item->fecha = $row['fecha'];
			$item->hora = substr($row['hora'],0,8);

			return $item;
		
		}else{
			return null;
		}
	}

	public function delete($id){

		if($delete=$this->db->execute("delete from sensores WHERE id= ' ".$id."' ")){
			return true;
		}else{
			return false;
		}
	}	


}


?>