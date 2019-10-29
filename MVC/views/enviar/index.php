<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Enviar View</title>
</head>
<body>

	<?php require('views/header.php'); ?>

	<div class="center">
		<h1>ThunderBoard Sense 2 en aplicaciones IoT</h1>
		<img src="<?php echo constant('URL').'public/images/th_sense2.png'; ?>" alt="Thunderboard sense 2 image" style="width:25%"> 
	</div>
	
	<div Class= forms>
	   <h3>Obtener el permiso JWT de 24 horas de duración</h3>

	   <div Class="error"><?php echo $this->mensajeToken; ?></div>

	   <form action="<?php echo constant('URL'); ?>enviar/obtenerToken" method="POST">
  		 <input type='hidden' name='action' value='register'>
  	   </label><input type='text' name='nombre' placeholder="Usuario" required value=""><br>
    	 </label><input type='text' name='password'placeholder="Contraseña" required value=""><br>
  		 <input type='submit' value='Obtener JWT'>
	   </form>

	   <h3>Configurar tiempo de envios del nodo</h3>

     <div Class="error"><?php echo $this->mensajeTiempoEnvio; ?></div>

     <form name="formulario" method="post" action="<?php echo constant('URL'); ?>enviar/configurarTiempoEnvio">
    	<!-- Datos del formulario -->
    	<input type="text" name="jwt" placeholder="JWT" required value="<?php echo $this->mensajeToken; ?>">
    	<!-- Botón de envío de formulario -->
   		 <input type="number" name="horas" placeholder="hh" min="00" max="23" required value=""> :
    	<!-- Datos del formulario -->
   		 <input type="number" name="minutos" placeholder="mm" min="01" max="59" required value="">
    	<!-- Botón de envío de formulario -->
    	<input type="submit" value="Enviar" <?php echo $this->buttonsState; ?>>
     </form>

	   <br>

	   <h3>Seleccione los valores de los sensores a recibir</h3>

     <div Class="error"><?php echo $this->mensajeSensoresEnvio; ?></div>

      <form action="<?php echo constant('URL'); ?>enviar/configurarSensoresEnvio" method="post">
  		  <input type="text" name="jwt" placeholder="JWT" required value="<?php echo $this->mensajeToken; ?>">
  		  <input type="submit" value="Enviar" <?php echo $this->buttonsState; ?>><br><br>
        <input type="checkbox" name="dato1" value="1" checked> UV<br>
        <input type="checkbox" name="dato2" value="1" checked> Presion<br>
        <input type="checkbox" name="dato3" value="1" checked> Temperatura<br>
        <input type="checkbox" name="dato4" value="1" checked> Luz Ambiente<br>
        <input type="checkbox" name="dato5" value="1" checked> Sonido<br>
        <input type="checkbox" name="dato6" value="1" checked> Humedad<br>
        <input type="checkbox" name="dato7" value="1" checked> Nivel bateria<br>
        <input type="checkbox" name="dato8" value="1" checked> ECO2<br>
        <input type="checkbox" name="dato9" value="1" checked> TCO2<br>
  		  <input type="checkbox" name="dato10" value="1" checked> Estado Hall<br>
  		  <input type="checkbox" name="dato11" value="1" checked> Hall MF<br>
	    </form>

	</div>

	<?php require('views/footer.php'); ?>

</body>

</html> 
	

