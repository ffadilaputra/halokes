@extends('admin.template')
@section('content')
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
         Statistik data santri tahun {{ $year }}
      </h1>
   </div>
</div>
<div class="row">
   <div class="col-lg-12">
      <div class="row">
        <div class="col-lg-8">
          <div id="graph"></div>
        </div>
      </div>
      <hr>
   </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js"></script>

<script>
    Morris.Bar({
        element: 'graph',
        data: [
            { y: <?= $year ?>, lama: <?= $santri_statistic ?>, baru: <?= $santri_statistic_new ?> }
        ],
        xkey: ['y'],
        ykeys: ['lama','baru'],
        labels: ['Lama','Baru']
    })
</script>
@stop