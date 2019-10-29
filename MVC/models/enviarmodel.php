<?php

/**
* EnviarModel
* Autor: Alejandro Piñan Roescher
*/
include_once('models/envio.php');

class EnviarModel extends Model{
	
	public function __construct(){

		parent::__construct();
	}
	
	public function getToken($usuario, $password){

		$token = [];

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'http://localhost:8080/api/internal/login');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "{  \n   \"password\": \"$password\",  \n   \"username\": \"$usuario\"  \n }");
		curl_setopt($ch, CURLOPT_POST, 1);

		$headers = array();
		$headers[] = 'Content-Type: application/json';
		$headers[] = 'Accept: application/json';
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);

		if (curl_errno($ch)) {
			$token[1] = curl_error($ch); 
		}else{

			$obj = json_decode($result, true);

			$jwt = $obj['jwt'];
			$error = $obj['error'];

			if ($jwt == NULL) {
   				$token[0] = false;
   			 	$token[1] = $error;

			}else{

				$token[0] = true;
				$token[1]= $jwt;
			}	

		}
		curl_close ($ch);
		return $token;	
	}

	public function getCurlPost($datos, $permiso){

		$Resultfcont = [];

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'http://localhost:8080/api/devices/00d994825a4cea00/queue');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "{  \n   \"deviceQueueItem\": {  \n     \"confirmed\": true,  \n     \"data\": \"$datos\",  \n     \"devEUI\": \"00d994825a4cea00\",  \n     \"fCnt\": 0,  \n     \"fPort\": 1,  \n     \"jsonObject\": \"\"  \n   }  \n }");
		curl_setopt($ch, CURLOPT_POST, 1);

		$headers = array();
		$headers[] = 'Content-Type: application/json';
		$headers[] = 'Accept: application/json';
		$headers[] = 'Grpc-Metadata-Authorization: Bearer '. $permiso;
		//$headers[] = $_POST["usuario"];
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);
		//echo '<br>Resultado:' . $result;

		if (curl_errno($ch)) {
    		//echo '<br>Error:' . curl_error($ch);
    		return curl_error($ch);
		}else{
			$obj = json_decode($result, true);

			$error = $obj['error'];
			$fcont = $obj['fCnt'];

			if ($fcont == NULL) {
   				$Resultfcont[0]= false;
   				$Resultfcont[1]= $error;
			}else{
   				$Resultfcont[0]= true;
   				$Resultfcont[1]= $fcont;
			}	
		}
		curl_close ($ch);
		return $Resultfcont;
	}

	public function saveDowlinkRequest($dowlinkFcont){

		$event = "Downlink Request, solicitud de envio al dispositivo, para Downlink fCnt ". $dowlinkFcont;

		$this->db->execute("insert into avisos(estado) values ('".$event."')");
	}

}
?>