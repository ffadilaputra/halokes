@extends('admin.template')
@section('content')
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
         Master Kategori Keuangan
      </h1>
   </div>
</div>
<div class="row">
   <div class="col-lg-12">
      <div class="row">

        <div class="col-lg-4">
        <center>
        <div id="chart_ppdb" style="width: 80%; height: 500px;"></div>
        </center></div>

        <div class="col-lg-4">
        <center>
        <div id="chart_her" style="width: 80%; height: 500px;"></div>
        </center></div>

        <div class="col-lg-4">
        <center>
        <div id="chart_spp" style="width: 80%; height: 500px;"></div>
        </center></div>
         <!-- ini bisa -->
         <!-- <div id="chartMa" style="height: 370px; width: 100%;"></div> -->
         
      </div>
      <hr>
      <h1>
      hhahah</h1>
   </div>
</div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Pondok Pesantren', 'Lunas', 'Belum'],
          ['MA', 1000, 400],
          ['MTS', 1170, 460],
          ['Madin', 660, 1120],
        ]);

        var options = {
          chart: {
            title: 'Status Pembayaran PPDB',
            subtitle: 'Status Pembayaran PPDB periode 2018-2019',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('chart_ppdb'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
</script>

<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Pondok Pesantren', 'Lunas', 'Belum'],
          ['MA', 100, 400],
          ['MTS', 170, 160],
        ]);

        var options = {
          chart: {
            title: 'Status Pembayaran SPP',
            subtitle: 'Status Pembayaran SPP periode 2018-2019',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('chart_spp'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
</script>

<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Pondok Pesantren', 'Lunas', 'Belum'],
          ['MA', 300, 480],
          ['MTS', 170, 360],
        ]);

        var options = {
          chart: {
            title: 'Status Pembayaran Heregristasi',
            subtitle: 'Status Pembayaran Heregristasi periode 2018-2019',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('chart_her'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
</script>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
<script>

window.onload = function () {

var chart1 = new CanvasJS.Chart("chartMa", {
	theme: "light1", // "light2", "dark1", "dark2"
	animationEnabled: false, // change to true		
	title:{
		text: "Pembayaran"
	},
	data: [
	{
		// Change type to "bar", "area", "spline", "pie",etc.
		type: "column",
		dataPoints: [
			{ label: "MA Belum",  y: 10  },
			{ label: "MA Sudah", y: 15  },
            { label: "MTS Belum",  y: 10  },
			{ label: "MTS Sudah", y: 15  },
            { label: "Madin Belum",  y: 10  },
			{ label: "Madin Sudah", y: 15  },
		]
	}
	]
});
chart1.render();

}

</script>


@stop