
<?php 

include_once 'pgsql.php';

$db = new DataBase();

//header("Content-type: application/json");
$json = file_get_contents("php://input");

error_log( "1_________Recive UpLink data: ".$json );

$obj = json_decode($json, true);

$puerto = $obj['fPort'];
$decodec = $obj['data'];
$objeto = $obj['object'];
$fCnt = $obj['fCnt'];
$fPort = $obj['fPort'];
$applicationName = $obj['applicationName'];
$deviceName = $obj['deviceName'];
$devEUI = $obj['devEUI'];
$rxInfo_gatewayID = $obj['rxInfo'][0]['gatewayID'];
$rxInfo_rssi = $obj['rxInfo'][0]['rssi'];
$rxInfo_rssi = $rxInfo_rssi . " dBm";
$rxInfo_loRaSNR = $obj['rxInfo'][0]['loRaSNR'];
$txInfo = $obj['txInfo'];
$txfrec = $txInfo['frequency'];
$txdr = $txInfo['dr'];

error_log( "1____fport: ".($puerto) );
error_log( "2____data: ".($decodec) );
error_log( "3____object: ".($objeto) );
error_log( "4____como viene: ".($rxInfo) );
error_log( "5____fCnt: ".($fCnt) );
error_log( "6____fPort: ".($fPort) );
error_log( "7____data: ".($decodec) );
error_log( "8____deviceName: ".($deviceName) );
error_log( "9____devEUI: ".($devEUI) );
error_log( "10____rxInfo Gata: ".($rxInfo_gatewayID) );
error_log( "11____rxInfo rssi: ".($rxInfo_rssi) );
error_log( "12____rxInfo SNR: ".($rxInfo_loRaSNR) );
error_log( "13____txfrec: ".($txfrec) );
error_log( "14____txdr: ".($txdr));

if ( $puerto == 1 ) {

	$evento = $objeto['state'] . ", EUI: " . $devEUI;
	error_log( "2_________UpLink data to save, port 1(events): ". $evento );

	$db->execute("insert into avisos(estado) values ('".$evento."')");

}else if ($puerto == 3){

	error_log( "2_________UpLink data to save, port 3(sensor data):" );

	$db->execute("insert into sensores(hall, humedad, uv, luz_ambiiente, bateria, presion, sonido, temperatura, ec02, tvoc, fieldstrength, deveui, fcnt, fport, rxinfo_gatewayid, rxinfo_rssi, rxinfo_lorasnr, txfrec, txdr ) values ('".$objeto['Estado Hall']."', '".$objeto['Humedad']."', '".$objeto['Indice UV']."', '".$objeto['Luz Ambiente']."', '".$objeto['Nivel de Batería']."', '".$objeto['Presión']."', '".$objeto['Sonido']."', '".$objeto['Temperatura']."', '".$objeto['ECO2']."', '".$objeto['TVOC']."', '".$objeto['fieldStrength']."', '".$devEUI."', '".$fCnt."', '".$fPort."', '".$rxInfo_gatewayID."', '".$rxInfo_rssi."', '".$rxInfo_loRaSNR."', '".$txfrec."', '".$txdr."')");

}

?>
/*application/1/device/00d994825a4cea00/
	rx {
		"applicationID":"1",
		"applicationName":"TBIOT",
		"deviceName":"IOTDEV",
		"devEUI":"00d994825a4cea00",
		"rxInfo":[{
				"gatewayID":"30aea4ffff74b3d4",
				"name":"LopyGateway",
				"time":"2019-05-21T18:16:13.540126Z",
				"rssi":-42,
				"loRaSNR":7,
				"location":{
							"latitude":0,
							"longitude":0,
							"altitude":0
							}}],
	"txInfo":{
				"frequency":868100000,
				"dr":5
			  },
	"adr":false,
	"fCnt":1,
	"fPort":3,
	"data":"AQEAAgTMbA8AAwJDCwQEHAgAAAUCpBMGAg4TBwFkCAKQAQkCAAAKAQELBFr///8=",
	"object":{
				"ECO2":"400 ppm",
				"Estado Hall":"1",
				"Humedad":"48.78 %",
				"Indice UV":"0",
				"Luz Ambiente":"2.076 Lux",
				"Nivel de Batería":"100 %",
				"Presión":"1010.892 hPa",
				"Sonido":"50.28 dB",
				"TVOC":"0 ppb",
				"Temperatura":"28.83 ºC",
				"fieldStrength":"-166 uT"
			}}
*/