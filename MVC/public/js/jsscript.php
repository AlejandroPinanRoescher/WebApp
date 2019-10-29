  
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <!--<script type="text/javascript">-->
  <script> 

    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
      
    function drawChart() {

      var temperature = google.visualization.arrayToDataTable(<?php echo $this->temperature; ?>);
      var humidity    = google.visualization.arrayToDataTable(<?php echo $this->humidity; ?>);
      var pressure    = google.visualization.arrayToDataTable(<?php echo $this->pressure; ?>);
      var sound       = google.visualization.arrayToDataTable(<?php echo $this->sound; ?>);
      var alight      = google.visualization.arrayToDataTable(<?php echo $this->alight; ?>);
      var fieldStr    = google.visualization.arrayToDataTable(<?php echo $this->fieldStr; ?>);
      var ec02        = google.visualization.arrayToDataTable(<?php echo $this->ec02; ?>);
      var tvoc        = google.visualization.arrayToDataTable(<?php echo $this->tvoc; ?>);
      var batery      = google.visualization.arrayToDataTable(<?php echo $this->batery; ?>);
      var rxRssi      = google.visualization.arrayToDataTable(<?php echo $this->rxRssi; ?>);
      var txData      = google.visualization.arrayToDataTable(<?php echo $this->txData; ?>); 

      var temperature_options = {
        colors: [ 'orange'],
        title: 'Temperatura',
        curveType: 'function',
        legend: { position: 'bottom' }
      };

      var humidity_options = {
        colors: [ 'blue'],
        title: 'Humedad',
        curveType: 'function',
        legend: { position: 'bottom' }
      };

      var pressure_options = {
        colors: [ 'green'],
        title: 'Presion',
        curveType: 'function',
        legend: { position: 'bottom' }
      };

      var sound_options = {
        colors: [ 'red'],
        title: 'Sound',
        curveType: 'function',
        legend: { position: 'bottom' }
      };

      var alight_options = {
        colors: [ 'yellow'],
        title: 'Alight',
        curveType: 'function',
        legend: { position: 'bottom' }
      };

      var fieldStr_options = {
        colors: [ 'black'],
        title: 'FildStrenght',
        curveType: 'function',
        legend: { position: 'bottom' }
      };

      var ec02_options = {
        colors: [ 'darkgreen'],
        title: 'ECO2',
        curveType: 'function',
        legend: { position: 'bottom' }
      };

      var tvoc_options = {
        colors: [ 'green'],
        title: 'TVO',
        curveType: 'function',
        legend: { position: 'bottom' }
      };

      var batery_options = {
        colors: [ 'navy'],
        title: 'Bateria',
        curveType: 'function',
        legend: { position: 'bottom' }
      };

      var rxRssi_options = {
        colors: [ 'blue','red'],
        title: 'Rx parameters',
        curveType: 'function',
        legend: { position: 'bottom' }
      };

      var txData_options = {
        colors: [ 'black','blue'],
        title: 'Tx parameters',
        curveType: 'function',
        legend: { position: 'bottom' }
      };

      var tempera_chart  = new google.visualization.LineChart(document.getElementById('tempera_chart'));
      var humidity_chart = new google.visualization.LineChart(document.getElementById('humidity_chart'));
      var pressure_chart = new google.visualization.LineChart(document.getElementById('pressure_chart'));
      var sound_chart    = new google.visualization.LineChart(document.getElementById('sound_chart'));
      var alight_chart   = new google.visualization.LineChart(document.getElementById('alight_chart'));
      var fieldStr_chart = new google.visualization.LineChart(document.getElementById('fieldStr_chart'));
      var ec02_chart     = new google.visualization.LineChart(document.getElementById('ec02_chart'));
      var tvoc_chart     = new google.visualization.LineChart(document.getElementById('tvoc_chart'));
      var batery_chart   = new google.visualization.LineChart(document.getElementById('batery_chart'));
      var rxRssi_chart   = new google.visualization.LineChart(document.getElementById('rxRssi_chart'));
      var txData_chart   = new google.visualization.LineChart(document.getElementById('txData_chart'));

      tempera_chart.draw(temperature, temperature_options);
      humidity_chart.draw(humidity, humidity_options);
      pressure_chart.draw(pressure, pressure_options);
      sound_chart.draw(sound, sound_options);
      alight_chart.draw(alight, alight_options);
      fieldStr_chart.draw(fieldStr, fieldStr_options);
      ec02_chart.draw(ec02, ec02_options);
      tvoc_chart.draw(tvoc, tvoc_options);
      batery_chart.draw(batery, batery_options);
      rxRssi_chart.draw(rxRssi, rxRssi_options);
      txData_chart.draw(txData, txData_options);


        function resizeHandler () {
          tempera_chart.draw(temperature, temperature_options);
          humidity_chart.draw(humidity, humidity_options);
          pressure_chart.draw(pressure, pressure_options);
          sound_chart.draw(sound, sound_options);
          alight_chart.draw(alight, alight_options);
          fieldStr_chart.draw(fieldStr, fieldStr_options);
          ec02_chart.draw(ec02, ec02_options);
          tvoc_chart.draw(tvoc, tvoc_options);
          batery_chart.draw(batery, batery_options);
          rxRssi_chart.draw(rxRssi, rxRssi_options);
          txData_chart.draw(txData, txData_options);
        }
        if (window.addEventListener) {
            window.addEventListener('resize', resizeHandler, false);
        }
        else if (window.attachEvent) {
            window.attachEvent('onresize', resizeHandler);
        }
    }


  </script>

  <script>
      google.charts.load('current', {'packages':['gauge']});
      google.charts.setOnLoadCallback(drawChart2);

      function drawChart2() {

        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['Temperatura', 28.5],
        ]);

        var options = {
          max:50,
          width: 500, height: 220,
          redFrom: 35, redTo: 50,
          yellowFrom:28, yellowTo: 35,
          minorTicks: 10
        };

        var chart = new google.visualization.Gauge(document.getElementById('chart_div'));
        chart.draw(data, options);
      }

    </script>