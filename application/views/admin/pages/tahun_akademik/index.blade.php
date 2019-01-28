@extends('admin.template')
@section('content')
<div class="col-lg-12">
   <h1 class="page-header">
      Master Tahun Akademik
   </h1>
   <a href="{{ base_url('admin/TahunAkademik/create') }}" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Create</a>
   <br><br>
</div>
<table class="table">
   <thead>
      <tr>
         <th>No</th>
         <th>Tahun Akademik</th>
         <th>Option</th>
      </tr>
   </thead>
   <tbody>
      <?php $no=1; ?>
      @foreach($list as $data)
      <tr>
         <td>{{ $no++ }}</td>
         <td>{{ $data->nama }}</td>
         <td>
            <a class="btn btn-primary" href="{{ base_url('admin/TahunAkademik/edit/').$data->id_tahun_akademik }}"><i class="fa fa-pencil"></i></a>
            <a class="btn btn-danger" href="{{ base_url('admin/TahunAkademik/delete/').$data->id_tahun_akademik }}"><i class="fa fa-trash"></i></a>
         </td>
      </tr>
      @endforeach
   </tbody>
</table>
@stop
<!-- jQuery -->
<script src="{{ base_url('assets/sb-admin/') }}js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ base_url('assets/sb-admin/') }}js/bootstrap.min.js"></script>
<script src="{{ base_url('assets/sb-admin/') }}js/jquery.dataTables.min.js"></script>
<script src="{{ base_url('assets/sb-admin/') }}js/dataTables.bootstrap.min.js"></script>
