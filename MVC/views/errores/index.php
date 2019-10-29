<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Errores View</title>
</head>
<body>
	<?php require('views/header.php'); ?>
	<div class="center">
		<h1 Class="error"><?php echo $this->mensaje;?></h1>
	</div>
	<?php require('views/footer.php'); ?>

</body>
</html> 