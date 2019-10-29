<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Consulta detalle View</title>
</head>
<body>
	<?php require('views/header.php'); ?>

	<div class="center">
		<h1 >Detalle de trasmision del <?php echo $this->sensor->fecha; ?> a las <?php echo $this->sensor->hora; ?> </h1>
		<h2 ><?php echo $this->mensaje; ?></h2>
	</div>

	<div class="overflowTable">
		<table>
			<thead>
				<tr>
					<!--<th>Detalle ID</th>-->
					<th>DevEUI</th>
					<th>fCnt</th>
					<th>fPort</th>
					<th>txfrec</th>
					<th>txdr</th>
					<th>rxInfo_gatewayID</th>
					<th>rxInfo_rssi</th>
					<th>rxInfo_loRaSNR</th>
					<th>Volver</th>
			</thead>
			<tbody>
				<!--<?php var_dump($this->sensor); ?>-->
				<tr>
					<!--<td><?php echo $this->sensor->id; ?></td>-->
					<td><?php echo $this->sensor->devEUI; ?></td>
					<td><?php echo $this->sensor->fCnt; ?></td>
					<td><?php echo $this->sensor->fPort; ?></td>
					<td><?php echo $this->sensor->txfrec; ?></td>
					<td><?php echo $this->sensor->txdr; ?></td>
					<td><?php echo $this->sensor->rxInfo_gatewayID; ?></td>
					<td><?php echo $this->sensor->rxInfo_rssi; ?></td>
					<td><?php echo $this->sensor->rxInfo_loRaSNR; ?></td>
					<td><a href="<?php echo constant('URL').'sensores#'.$this->sensor->id;?>">Volver</a> </td>	<!--cambio para volver al mismo sitio de la tabla-->
				</tr>
			</tbody>
		</table>
	</div>

	<?php require('views/footer.php'); ?>

</body>
</html> 
