@extends('admin.template')
@section('content')
<div class="col-lg-12">
   <h1 class="page-header">
      Mauidhoh
   </h1>
   <a href="{{ base_url('admin/mauidhoh/create') }}" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Create</a>
   <br><br>
</div>
<table class="table">
   <thead>
      <tr>
         <th>No</th>
         <th>Mauidhoh</th>
         <th>Opsi</th>
      </tr>
   </thead>
   <tbody>
      <?php $no=1; ?>
      @foreach($list as $data)
      <tr>
         <td>{{ $no++ }}</td>
         <td>{!! $data->description !!}</td>
         <td>
            <a class="btn btn-primary" href="{{ base_url('admin/mauidhoh/edit/').$data->id_mauidhoh }}"><i class="fa fa-pencil"></i></a>
            <a class="btn btn-danger" href="{{ base_url('admin/mauidhoh/delete/').$data->id_mauidhoh }}"><i class="fa fa-trash"></i></a>
         </td>
      </tr>
      @endforeach
   </tbody>
</table>
@stop
