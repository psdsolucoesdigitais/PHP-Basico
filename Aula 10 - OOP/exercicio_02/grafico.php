<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        <?php
          include "ContatoModel.php";
          $c = new ContatoModel;
          $resultado = $c->totalPorSexo();
        ?>
        var data = google.visualization.arrayToDataTable(

          [
            ['Sexo', 'total'],
          
          <?php 
          $t = count($resultado);
          $x = 1;
          foreach ($resultado as $value) { ?>
            ['<?php echo $value['sexo'] ?>', <?php echo $value[0] ?>]

          <?php 
            if ($x++ < $t) {
              echo ",";
            }
          } ?>

          ]

        );

        var options = {
          title : 'Monthly Coffee Production by Country',
          vAxis: {title: 'Cups'},
          hAxis: {title: 'Month'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 300px; height: 500px;"></div>
  </body>
</html>
