<?php 

include_once 'pgsql.php';

$db = new DataBase();

//header("Content-type: application/json");
$json = file_get_contents("php://input");

error_log( "1_________Recive JOIN FRAME: ".$json );

$obj = json_decode($json, true);

$devEUI = $obj['devEUI'];
$devAddr = $obj['devAddr'];
$event = "JOIN, dispositivo con EUI: " . $devEUI ." se une a la red en el addr: ". $devAddr;
error_log( "2_________Recive JOIN FRAME, event to save: ".($event));

$db->execute("insert into avisos(estado) values ('".$event."')");

?>




