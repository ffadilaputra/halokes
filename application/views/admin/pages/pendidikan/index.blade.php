@extends('admin.template')
@section('content')
<div class="col-lg-12">
   <h1 class="page-header">
      Master Pendidikan
   </h1>
   <a href="{{ base_url('admin/pendidikan/create') }}" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Riwayat Pendidikan</a>
   <br><br>
</div>
<table class="table">
   <thead>
      <tr>
         <th>No.</th>
         <th>Pendidikan Terakhir</th>
         <th>Option</th>
      </tr>
   </thead>
   <tbody>
      <?php $no=1; ?>
      @foreach($list as $data)
      <tr>
         <td>{{ $no++ }}</td>
         <td>{{ $data->pendidikan_terakhir }}</td>
         <td>
            <a class="btn btn-primary" href="{{ base_url('admin/pendidikan/edit/').$data->id_pen_terakhir }}"><i class="fa fa-pencil"></i></a>
            <a class="btn btn-danger" href="{{ base_url('admin/pendidikan/delete/').$data->id_pen_terakhir }}"><i class="fa fa-trash"></i></a>
         </td>
      </tr>
      @endforeach
   </tbody>
</table>
@stop
