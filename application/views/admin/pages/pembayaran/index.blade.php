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
                     <th>Nama Santri</th>
                     <th>Kode Pembayaran</th>
                     <th>Status Pembayaran</th>
                     <th>Tanggal Bayar</th>
                     <th>No Telepon</th>
                     <th>Opsi</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $n = 1 ?>
                  @foreach ($santri as $item)
                  <tr>
                     <th>{{ $n++ }}</th>
                     <th>{{ $item->pembayaranSantri->nama_lengkap }}</th>
                     <th>{{ $item->kode_pembayaran }}</th>
                     <th>{{ $item->status_pembayaran }}</th>
                     <th>{{ $item->created_at }}</th>
                     <th>{{ $item->pembayaranSantri->telepon }}</th>
                     <th>
                        <a href="{{ base_url('admin/pembayaran/show/').$item->id }}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                        <a href="{{ base_url('admin/pembayaran/edit/').$item->id }}" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                        <a href="{{ base_url('admin/pembayaran/delete/'.$item->id)}}" class="btn btn-success btn-sm"><i class="fa fa-trash-o"></i></a>
                     </th>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>

      </div>
   </div>
</div>
@stop
