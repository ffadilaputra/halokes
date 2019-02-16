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
          <div class="col-lg-8">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-bar"></i>
                Bar Chart Example</div>
              <div class="card-body">
                <canvas id="myBarChart" width="100%" height="50"></canvas>
              </div>
              <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-pie"></i>
                Pie Chart Example</div>
              <div class="card-body">
                <canvas id="myPieChart" width="100%" height="100"></canvas>
              </div>
              <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
          </div>
        </div>
   </div>
   <div class="card">
     <div class="card-body">
       <blockquote class="blockquote">
         <p>Quote</p>
         <footer class="card-blockquote">Footer<cite title="Source title">Source title</cite></footer>
       </blockquote>
     </div>
   </div>
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Work', 8],
  ['Eat', 2],
  ['TV', 4],
  ['Gym', 2],
  ['Sleep', 8]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Average Day', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

  <!-- Bootstrap core JavaScript-->
  
  <script src="{{ base_url('assets/sb-admin/jquery')}}/jquery.min.js"></script>
  <script src="{{ base_url('assets/sb-admin/bootstrap')}}/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ base_url('assets/sb-admin/jquery-easing')}}/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="{{ base_url('assets/sb-admin/chart.js')}}/Chart.min.js"></script>

  <!-- Custom scripts for all pages-->
  <!-- <script src="js/sb-admin.min.js"></script> -->

  <!-- Demo scripts for this page-->
  <script src="{{ base_url('assets/sb-admin/')}}/js/demo/chart-area-demo.js"></script>
  <script src="{{ base_url('assets/sb-admin/')}}/js/demo/chart-bar-demo.js"></script>
  <script src="{{ base_url('assets/sb-admin/')}}/js/demo/chart-pie-demo.js"></script>
@stop