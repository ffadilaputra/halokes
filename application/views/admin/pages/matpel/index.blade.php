@extends('admin.template')
@section('content')
<div class="col-lg-12">
   <h1 class="page-header">
      Master Mata Pelajaran
   </h1>
   <a href="{{ base_url('admin/matpel/create') }}" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Create</a>
   <br><br>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
               <h3 class="panel-title">
                  <i class="fa fa-book" aria-hidden="true"></i> Data Mata Pelajaran
               </h3>
            </div>
            <div class="panel-body">
        <table class="table" id="main">
            <thead>
               <tr>
                  <th>No</th>
                  <th>Mata Pelajaran</th>
                  <th>KKM Pengetahuan</th>
                  <th>KKM Keterampilan</th>
                  <th>Option</th>
               </tr>
            </thead>
            <tbody>
               <?php $no=1; ?>
               @foreach($matpel as $data)
               <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $data->nama_matpel }}</td>
                  <td>{{ $data->kkmpengetahuan }}</td>
                  <td>{{ $data->kkmketerampilan }}</td>
                  <td>
                     <a class="btn btn-sm btn-primary" href="{{ base_url('admin/matpel/create/').$data->id_matpel }}"><i class="fa fa-pencil"></i></a>
                     <a class="btn btn-sm btn-danger" href="{{ base_url('admin/matpel/delete/').$data->id_matpel }}"><i class="fa fa-trash"></i></a>
                  </td>
               </tr>
               @endforeach
            </tbody>
         </table>
    </div>
@stop
