<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([


                @php
                foreach($products as $product) {

                    echo "['".$product->nama_uraian_kegiatan." | ".$product->nama_sub_menu_uraian_kegiatan." | ".$product->kelompok_pagu."',"  .$product->persen."],";

                }
                @endphp

        ],true);
        var options = {
          title: 'Persentase Anggaran yang sudah direalisasikan',
          pieHole: 0.5,
          pieSliceText: 'value',
             tooltip: {
            text: 'value'
        }
        };


        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }


    </script>
  </head>
  <body>
    <h1>Laravel Google Pie Chart Example - ItSolutionStuff.com</h1>
     <div id="donutchart" style="width: 1000px; height: 500px;"></div>
</html>