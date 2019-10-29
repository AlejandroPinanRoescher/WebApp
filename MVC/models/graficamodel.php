<?php 

include_once('models/sensor.php');

class GraficaModel extends Model{

	public function __construct(){

		parent::__construct();
	}
	
	public function getTemperature(){
		
		$consulta = $this->db->execute("select temperatura, fecha, hora from sensores ORDER BY id ASC");
		if($consulta){

			$i = 0;
			$datos[$i] = array('Fecha','Temperatura ºC');
	
			while($row = pg_fetch_array($consulta, NULL, PGSQL_ASSOC)){

   				$fecha[$i] = substr($row['fecha'],0, 10) . "  Hora: ". substr($row['hora'],0,8);
   				$temp[$i] = (float) substr($row['temperatura'],0,5) ;
   				
   				$datos[$i+1] = array ($fecha[$i], $temp[$i]);

   				$i++;
       		}
       		$datos = json_encode($datos);
       		return $datos;

		}else{

			return[];
		}
	}

	public function getHumidity(){

		$consulta = $this->db->execute("select humedad, fecha, hora from sensores ORDER BY id ASC");
		if($consulta){
			$i = 0;
			$datos[$i] = array('Fecha','Humedad %');
		
			while($row = pg_fetch_array($consulta, NULL, PGSQL_ASSOC)){

   				$fecha[$i] = substr($row['fecha'],0, 10) . "  Hora: ". substr($row['hora'],0,8);
   				$hum[$i] = (float) substr($row['humedad'],0,5) ;
   				
   				$datos[$i+1] = array ($fecha[$i], $hum[$i]);
   				
   				$i++;
       		}
       		$datos = json_encode($datos);
       		return $datos;

		}else{
			
			return[];
		}
	}	

	public function getPressure(){

		$consulta = $this->db->execute("select presion, fecha, hora from sensores ORDER BY id ASC");
		if($consulta){
			$i = 0;
			$datos[$i] = array('Fecha','Presion hPa');
		
			while($row = pg_fetch_array($consulta, NULL, PGSQL_ASSOC)){

   				$fecha[$i] = substr($row['fecha'],0, 10) . "  Hora: ". substr($row['hora'],0,8);
   				$pre[$i] = (float) substr($row['presion'],0,8) ;
   				
   				$datos[$i+1] = array ($fecha[$i], $pre[$i]);
   				
   				$i++;
       		}
       		$datos = json_encode($datos);
       		return $datos;

		}else{
			
			return[];
		}
	}

	public function getSound(){

		$consulta = $this->db->execute("select sonido, fecha, hora from sensores ORDER BY id ASC");
		if($consulta){
			$i = 0;
			$datos[$i] = array('Fecha','Sonido dB');
		
			while($row = pg_fetch_array($consulta, NULL, PGSQL_ASSOC)){

   				$fecha[$i] = substr($row['fecha'],0, 10) . "  Hora: ". substr($row['hora'],0,8);
   				$sound[$i] = (float) substr($row['sonido'],0,5) ;
   				
   				$datos[$i+1] = array ($fecha[$i], $sound[$i]);
   				
   				$i++;
       		}
       		$datos = json_encode($datos);
       		return $datos;

		}else{
			
			return[];
		}
	}

	public function getAlight(){

		$consulta = $this->db->execute("select luz_ambiiente, fecha, hora from sensores ORDER BY id ASC");
		if($consulta){
			$i = 0;
			$datos[$i] = array('Fecha','luz ambiente Lux');
		
			while($row = pg_fetch_array($consulta, NULL, PGSQL_ASSOC)){

   				$fecha[$i] = substr($row['fecha'],0, 10) . "  Hora: ". substr($row['hora'],0,8);
   				$aLight[$i] = (float) substr($row['luz_ambiiente'],0,5) ;
   				
   				$datos[$i+1] = array ($fecha[$i], $aLight[$i]);
   				
   				$i++;
       		}
       		$datos = json_encode($datos);
       		return $datos;

		}else{
			
			return[];
		}
	}

	public function getFieldStr(){

		$consulta = $this->db->execute("select fieldstrength, fecha, hora from sensores ORDER BY id ASC");
		if($consulta){
			$i = 0;
			$datos[$i] = array('Fecha','fieldStrength uT');
		
			while($row = pg_fetch_array($consulta, NULL, PGSQL_ASSOC)){

   				$fecha[$i] = substr($row['fecha'],0, 10) . "  Hora: ". substr($row['hora'],0,8);
   				$fieldstrength[$i] = (float) substr($row['fieldstrength'],0,5) ;
   				
   				$datos[$i+1] = array ($fecha[$i], $fieldstrength[$i]);
   				
   				$i++;
       		}
       		$datos = json_encode($datos);
       		return $datos;

		}else{
			
			return[];
		}
	}

	public function getEc02(){

		$consulta = $this->db->execute("select ec02, fecha, hora from sensores ORDER BY id ASC");
		if($consulta){
			$i = 0;
			$datos[$i] = array('Fecha','ECO2 ppm');
		
			while($row = pg_fetch_array($consulta, NULL, PGSQL_ASSOC)){
				
   				$fecha[$i] = substr($row['fecha'],0, 10) . "  Hora: ". substr($row['hora'],0,8);
   				$ec02[$i] = (float) substr($row['ec02'],0,6) ;
   				
   				$datos[$i+1] = array ($fecha[$i], $ec02[$i]);
   				
   				$i++;
       		}
       		$datos = json_encode($datos);
       		return $datos;

		}else{
			
			return[];
		}
	}

	public function getTvoc(){

		$consulta = $this->db->execute("select tvoc, fecha, hora from sensores ORDER BY id ASC");
		if($consulta){
			$i = 0;
			$datos[$i] = array('Fecha','TVOC ppb');
		
			while($row = pg_fetch_array($consulta, NULL, PGSQL_ASSOC)){

   				$fecha[$i] = substr($row['fecha'],0, 10) . "  Hora: ". substr($row['hora'],0,8);
   				$tvoc[$i] = (float) substr($row['tvoc'],0,6) ;
   				
   				$datos[$i+1] = array ($fecha[$i], $tvoc[$i]);
   				
   				$i++;
       		}
       		$datos = json_encode($datos);
       		return $datos;

		}else{
			
			return[];
		}
	}

	public function getBatery(){

		$consulta = $this->db->execute("select bateria, fecha, hora from sensores ORDER BY id ASC");
		if($consulta){
			$i = 0;
			$datos[$i] = array('Fecha','Batery %');
		
			while($row = pg_fetch_array($consulta, NULL, PGSQL_ASSOC)){

   				$fecha[$i] = substr($row['fecha'],0, 10) . "  Hora: ". substr($row['hora'],0,8);
   				$bateria[$i] = (float) substr($row['bateria'],0,3) ;
   				
   				$datos[$i+1] = array ($fecha[$i], $bateria[$i]);
   				
   				$i++;
       		}
       		$datos = json_encode($datos);
       		return $datos;

		}else{
			
			return[];
		}
	}

	public function getRxData(){

		$consulta = $this->db->execute("select rxinfo_rssi, rxinfo_lorasnr, fecha, hora from sensores ORDER BY id ASC");
		if($consulta){
			$i = 0;
			$datos[$i] = array('Fecha','Rssi dBm', 'rx SNR');
		
			while($row = pg_fetch_array($consulta, NULL, PGSQL_ASSOC)){

   				$fecha[$i] = substr($row['fecha'],0, 10) . "  Hora: ". substr($row['hora'],0,8);
   				$rxRssi[$i] = (float) substr($row['rxinfo_rssi'],0,3) ;
   				$rxSNR[$i] = (float) substr($row['rxinfo_lorasnr'],0,3) ;
   				$datos[$i+1] = array ($fecha[$i], $rxRssi[$i], $rxSNR[$i]);
   				
   				$i++;
       		}
       		$datos = json_encode($datos);
       		return $datos;

		}else{
			
			return[];
		}
	}

	public function getTxData(){

		$consulta = $this->db->execute("select txfrec, txdr, fecha, hora from sensores ORDER BY id ASC");
		if($consulta){
			$i = 0;
			$datos[$i] = array('Fecha','txfrec Mhz', 'tx data rate');
		
			while($row = pg_fetch_array($consulta, NULL, PGSQL_ASSOC)){

   				$fecha[$i] = substr($row['fecha'],0, 10) . "  Hora: ". substr($row['hora'],0,8);
   				$txfrec[$i] = (float) substr($row['txfrec'],0,10) / 1000000;
   				$txdr[$i] = (float) substr($row['txdr'],0,2) ;
   				$datos[$i+1] = array ($fecha[$i], $txfrec[$i], $txdr[$i]);
   				
   				$i++;
       		}
       		$datos = json_encode($datos);
       		return $datos;

		}else{
			
			return[];
		}
	}

}


?>