<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Sensores View</title>
</head>
<body>
	<?php require('views/header.php'); ?>

	<div class="center">
		<h1 >Sección de consulta de datos</h1>
		<h2 ><?php echo $this->mensaje; ?></h2>
	</div>

	<div class="overflowTable">

		<table>
			<thead>
				<tr>
					<!--<th>ID</th>-->
					<th>Hall</th>
					<th>Mag</th>
					<th>Humedad</th>
					<th>UV</th>
					<th>AmbiLight</th>
					<th>Bateria</th>
					<th>Presion</th>
					<th>Sonido</th>
					<th>Temperatura</th>
					<th>ECO2</th>
					<th>TVOC</th>
					<th>Fecha</th>
					<th>Hora</th>
					<th>Detalle</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include_once('models/sensor.php');
					foreach($this->sensores as $row){
						$sensor = new Sensor();
						$sensor =  $row;	
				?>
				<tr>
					<!--<td id="<?php echo $sensor->id; ?>"><?php echo $sensor->id; ?></td>-->
					<td><?php echo $sensor->hall; ?></td>
					<td><?php echo $sensor->fieldstrength; ?></td>
					<td><?php echo $sensor->humedad; ?></td>
					<td><?php echo $sensor->uv; ?></td>
					<td><?php echo $sensor->luz_ambiente; ?></td>
					<td><?php echo $sensor->bateria; ?></td>
					<td><?php echo $sensor->presion; ?></td>
					<td><?php echo $sensor->sonido; ?></td>
					<td><?php echo $sensor->temperatura; ?></td>
					<td><?php echo $sensor->ec02; ?></td>
					<td><?php echo $sensor->tvoc; ?></td>
					<td><?php echo $sensor->fecha; ?></td>
					<td><?php echo $sensor->hora; ?></td>
					<td><a href="<?php echo constant('URL').'sensores/verDetalle/'.$sensor->id; ?>">Detalle</a> </td>
					<td><a href="<?php echo constant('URL').'sensores/eliminarDatos/'.$sensor->id; ?>">Eliminar</a> </td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	
	<?php require('views/footer.php'); ?>

</body>
</html> 