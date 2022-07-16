@extends('layouts.app')

@section('nama_menu')

<h5 class="mb-0">
    Dashboard I
</h5>

<nav aria-label="breadcrumb">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard I</li>
    </ul>
</nav>
@endsection


@section('content')
<html>
  <head>

     <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>

      <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js   "></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>

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
             colors: ['#fbf8cc', '#fde4cf', '#ffcfd2', '#f1c0e8', '#cfbaf0',
                    '#a3c4f3', '#90dbf4', '#8eecf5', '#98f5e1', '#b9fbc0'],
        //   title: 'Persentase Anggaran yang sudah direalisasikan',
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

     <div class="col-md-9">
        <div class="iq-card"  style="width: 1000px; height: 600px;">
            <div class="iq-card-header d-flex justify-content-between">
                <h4 class="card-title">Persentase Realisasi Pagu Anggaran </h4>
            </div>
             <div class="iq-card-body">
                 <div id="donutchart" style="width: 900px; height: 500px;"></div>
             </div>
        </div>
     </div>



     </body>

<script src="assets/js/jquery.min.js"></script>
</html>
@endsection