@extends('admin.template')
@section('content')
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
         Pembayaran Santri
      </h1>
      <ol class="breadcrumb">
         <li class="active">
            <i class="fa fa-book" aria-hidden="true"></i> Pembayaran Santri
         </li>
      </ol>
   </div>
</div>
<div class="col-lg-12">
    <div class="form-group">
        <a class="btn btn-info" href="{{ base_url('admin/pembayaran/create') }}"><i class="fa fa-plus"></i>&nbsp;Pembayaran</a>
    </div>
   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title">
            <i class="fa fa-book" aria-hidden="true"></i> Data Pembayaran
         </h3>
      </div>
      <div class="panel-body">
         <div class="table-responsive">
            <table id="main" class="table table-bordered table-hover table-striped">
               <thead>
                  <tr>
                     <th>No</th>
                     <th>ID Santri</th>
                     <th>Nama Lengkap</th>
                     <th>Telepon</th>
                     <th>Opsi</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $n = 1 ?>

               </tbody>
            </table>
         </div>

      </div>
   </div>
</div>
@stop


{{-- INI HARUS ADA DISEMUA LAYOUT SUPAYA BIAR BISA DI KLIK DROPDOWNNYA --}}
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