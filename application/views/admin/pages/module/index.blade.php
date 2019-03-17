@extends('admin.template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
           Konfigurasi Module
        </h1>
        <a href="{{ base_url('admin/module/create') }}" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Create</a>
        <br><br>
     </div>
</div>
<div class="row">
  <div class="col-lg-12">
      <div class="panel panel-default">
          <div class="panel-heading">
             <h3 class="panel-title">
                <i class="fa fa-book" aria-hidden="true"></i> Data Module
             </h3>
          </div>
          <div class="panel-body">
      <table class="table" id="main">
          <thead>
             <tr>
                <th>ID Module</th>
                <th>Nama <i>Class</i></th>
                <th>Label</th>
                <th>Option</th>
             </tr>
          </thead>
          <tbody>
             <?php $no=1; ?>
             @foreach($module as $data)
             <tr>
                <td>{{ $data->id_modul }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->label }}</td>
                <td>
                   <a class="btn btn-sm btn-primary" href="{{ base_url('admin/module/create/').$data->id_modul }}"><i class="fa fa-pencil"></i></a>
                   <a class="btn btn-sm btn-danger" href="{{ base_url('admin/module/delete/').$data->id_modul }}"><i class="fa fa-trash"></i></a>
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
