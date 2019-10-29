<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>
	<link rel = "stylesheet" href= "<?php echo constant('URL'); ?>public/css/styles.css">
</head>
<body>
	<div id="menu">
		<ul>
			<li><a class="<?php echo $this->activoM; ?>" href="<?php echo constant('URL'); ?>inicio">Inicio</a></li>
			<li><a class="<?php echo $this->activoS; ?>" href="<?php echo constant('URL'); ?>sensores">Sensores</a></li>
			<li><a class="<?php echo $this->activoA; ?>" href="<?php echo constant('URL'); ?>aviso">Avisos</a></li>
			<li><a class="<?php echo $this->activoE; ?>" href="<?php echo constant('URL'); ?>enviar">Enviar</a></li>
			<li><a class="<?php echo $this->activoG; ?>" href="<?php echo constant('URL'); ?>grafica">Gráficas</a></li>
		</ul>
	</div>
</body>
</html> 
