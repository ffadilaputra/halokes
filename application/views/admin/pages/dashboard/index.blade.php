@extends('admin.template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
           Dashboard
        </h1>
     </div>
</div>
<div class="row">
  <div class="col-lg-12">
      <div class="panel panel-default">
          <div class="panel-heading">
             <h3 class="panel-title">
                <i class="fa fa-book" aria-hidden="true"></i> Statistik berdasarkan Madarasah
             </h3>
          </div>
          <div class="panel-body">
            <div id="graph">
            </div>
          </div>
      </div>
      </div>
</div>
@stop
