<?php 

include_once 'pgsql.php';

$db = new DataBase();

//header("Content-type: application/json");
$json = file_get_contents("php://input");

error_log( "1_________ACK notification: ".$json );

$obj = json_decode($json, true);

$devEUI = $obj['devEUI'];
$acknowledged = $obj['acknowledged'];
$fCnt = $obj['fCnt'];

if($acknowledged){
  $acknowledged = "True";
}else{
  $acknowledged = "False";
}

$event = "Downlink ACK, dispositivo con EUI: " .$devEUI.", para fcont: " .$fCnt. " Acknowledged = " . $acknowledged;
error_log( "1_________ACK notification event to save: ".($event) );

$db->execute("insert into avisos(estado) values ('".$event."')");

?>




