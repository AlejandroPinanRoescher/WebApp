<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Inicio View</title>
</head>
<body>

	<?php require('views/header.php'); ?>

	<div class="center">
		<h1 >Thunderboard Sense 2 en aplicaciones IoT</h1>
	</div>

	<div class = "center">
		<img src="<?php echo constant('URL').'public/images/th_sense2.png'; ?>" alt="Thunderboard sense 2 image" style="width:30%"> 
	</div>

	<div class="center">
		<p>Esta aplicacion Web representa una integracion HTTP con el servidor LoRa Server, y ha sido desarrollada para validar la participacion de un nodo final, diseñado a partir de la placa sensora, en una red LoRaWAN</p>
	</div>
		
	<?php require('views/footer.php'); ?>

</body>
</html> 