@extends('admin.template')
@section('content')
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
         Data Berita
      </h1>
      <ol class="breadcrumb">
         <li class="active">
            <i class="fa fa-dashboard"></i>Dashboard
         </li>
      </ol>
   </div>
</div>
<div class="col-lg-12">
   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title">
            <i class="fa fa-file fa-fw"></i>Berita Panel
         </h3>
      </div>
      <div class="panel-body">
         <div class="table-responsive">
            <table id="main" class="table table-bordered table-hover table-striped">
               <thead>
                  <tr>
                     <th style="width:5%">No.</th>
                     <th style="width:25%">Judul</th>
                     <th style="width:60%">Isi</th>
                     <th style="width:20%">Opsi</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $n = 1 ?>
                  @foreach($post as $data)
                  <tr>
                     <td>{{ $n++ }}</td>
                     <td>{{ $data->title }}</td>
                     <td>{!! $data->description !!}</td>
                     <td>
                        <a class="btn btn-success" href="{{ base_url('admin/berita/show/').$data->id_news }}"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-primary" href="{{ base_url('admin/berita/edit/').$data->id_news }}"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger" href="{{ base_url('admin/berita/delete/').$data->id_news }}"><i class="fa fa-trash"></i></a>
                     </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
         <div class="text-right">
            <a href="#">View All Transactions
            <i class="fa fa-arrow-circle-right"></i>
            </a>
         </div>
      </div>
   </div>
</div>
@stop
@section('scripts')
<!-- jQuery -->
<script src="{{ base_url('assets/sb-admin/') }}js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ base_url('assets/sb-admin/') }}js/bootstrap.min.js"></script>
<script src="{{ base_url('assets/sb-admin/') }}js/jquery.dataTables.min.js"></script>
<script src="{{ base_url('assets/sb-admin/') }}js/dataTables.bootstrap.min.js"></script>
<script>
   $(document).ready(()=> {
     $('#main').DataTable();
   })
</script>
@stop