<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Aviso View</title>
</head>
<body>

	<?php require('views/header.php'); ?>

	<div class="center">
		<h1 >Sección de avisos</h1>
		<h2 ><?php echo $this->mensaje; ?></h2>
	</div>	
		<div class="overflowTable">
		<table>
			<thead id="myHeader">
				<tr>
					<!--<th>ID</th>-->
					<th>Estado</th>
					<th>Fecha</th>
					<th>Hora</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include_once('models/alerta.php');
					foreach($this->avisos as $row){
						$aviso = new Aviso();
						$aviso =  $row;
				?>
				<tr>
					<!--<td><?php echo $aviso->id; ?></td>-->
					<td><?php echo $aviso->estado; ?></td>
					<td><?php echo $aviso->fecha; ?></td>
					<td><?php echo $aviso->hora; ?></td>
					<td><a href="<?php echo constant('URL').'aviso/eliminarEvento/'.$aviso->id; ?>">Eliminar</a> </td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		</div>
	<?php require('views/footer.php'); ?>
</body>

</html> 