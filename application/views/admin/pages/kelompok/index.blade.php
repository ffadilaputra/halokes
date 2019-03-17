@extends('admin.template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
           Kelola Kelompok
        </h1>
     </div>
</div>
<div class="row">
  <div class="col-lg-8">
      <div class="panel panel-default">
          <div class="panel-heading">
             <h3 class="panel-title">
                <a href="{{ base_url('admin/kelompok/create_a') }}" class="text-default btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i>Data Kelompok A</a>
             </h3>
          </div>
          <div class="panel-body">
      <table class="table table-responsive" id="main">
          <thead>
             <tr>
                <th>No</th>
                <th>Mata Pelajaran</th>
                <th>Opsi</th>
             </tr>
          </thead>
          <tbody>
             <?php $no=1; ?>
             @foreach($kelompok as $data)
             <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->nama_matpel }}</td>
                <td>
                   <a class="btn btn-sm btn-primary" href="{{ base_url('admin/kelas/create/').$data->id_masterkelas }}"><i class="fa fa-pencil"></i></a>
                   <a class="btn btn-sm btn-danger" href="{{ base_url('admin/kelas/delete/').$data->id_masterkelas }}"><i class="fa fa-trash"></i></a>
                </td>
             </tr>
             @endforeach
          </tbody>
       </table>
          </div>
      </div>
      </div>
</div>
@stop
