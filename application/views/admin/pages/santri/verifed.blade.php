@extends('admin.template')
@section('content')
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
         Verifikasi Santri
      </h1>
      <ol class="breadcrumb">
         <li class="active">
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Verifikasi Santri
         </li>
      </ol>
   </div>
</div>
<div class="col-lg-12">
   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title">
            <i class="fa fa-book" aria-hidden="true"></i> Verifikasi Data Santri
         </h3>
      </div>
      <div class="panel-body">
         <div class="table-responsive">
            <table id="main" class="table table-bordered table-hover table-striped">
               <thead>
                  <tr>
                    <th>No</th>
                    <td>NIS</td>
                    <td>Nama Lengkap</td>
                    <td>Kecamatan</td>
                    <td>Kota</td>
                    <td>Profinsi</td>
                    <td>Telepon</td>
                    <td>Kodepos</td>
                    <td>Status</td>
                    <td>Opsi</td>
                  </tr>
               </thead>
               <tbody>
                  <?php $n = 1 ?>
                  @foreach($santri as $item)
                  <tr>
                    <td>{{ $n++ }}</td>
                    <td>{{ $item->nis }}</td>
                    <td>{{ $item->nama_lengkap }} </td>
                    <td>{{ $item->kecamatan }}</td>
                    <td>{{ $item->kota }}</td>
                    <td>{{ $item->provinsi }}</td>
                    <td>{{ $item->telepon }}</td>
                    <td>{{ $item->kode_pos }}</td>
                      @if(isset($item->getVerification->status))
                        <td>{{ $item->getVerification->status }}</td>
                        @else
                        <td>Belum</td>
                      @endif
                    <td>
                        <a class="btn btn-info" href="{{ base_url('admin/santri/show/').$item->id_santri }}"><i class="fa fa-eye"></i>&nbsp;Detail</a>
                        <a class="btn btn-success" href="{{ base_url('admin/santri/verifiy/').$item->id_santri }}"><i class="fa fa-check-square-o" aria-hidden="true"></i> Verifikasi</a>
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
