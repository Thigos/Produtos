<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Categoria', 'Quantidade'],
          <?php
            foreach (array_count_values($arrayCategorias) as $categKey => $num) {
                echo ("['".$categKey."',    ". $num."],");
            }
            ?>
        ]);

        var options = {
          title: 'Quantidade de produtos por categoria'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
</script>