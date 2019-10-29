<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Graficas View</title>
</head>
<body>
  <?php require('views/header.php'); ?>

  <?php require('public/js/jsscript.php'); ?>

  <div class="center">
    <h1>Sección de gráficas</h1>
     <!--<h2><?php echo $this->mensaje; ?></h2>-->
  </div>

    <div id="tempera_chart" ></div><br>
    <div id="humidity_chart"></div><br>
    <div id="pressure_chart"></div><br>
    <div id="sound_chart"   ></div><br>
    <div id="alight_chart"  ></div><br>
    <div id="fieldStr_chart"></div><br>
    <div id="ec02_chart"    ></div><br>
    <div id="tvoc_chart"    ></div><br>
    <div id="batery_chart"  ></div><br>
    <div id="rxRssi_chart"  ></div><br>
    <div id="txData_chart"  ></div><br>

  <?php require('views/footer.php'); ?>
  
</body>
</html> 
