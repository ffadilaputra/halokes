@extends('admin.template')
@section('content')
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
         Santri Madarasah Tsanawiyah
      </h1>
      <ol class="breadcrumb">
         <li class="active">
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Halaman Santri Madarasah Tsanawiyah
         </li>
      </ol>
   </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
       <div class="panel-heading">
          <h3 class="panel-title">
             <i class="fa fa-book" aria-hidden="true"></i> Data Santri
          </h3>
       </div>
       <div class="panel-body">
          <div class="table-responsive">
             <table id="main" class="table table-bordered table-hover table-striped">
                <thead>
                   <tr>
                      <th>No</th>
                      <th>Nama Lengkap</th>
                      <th>Wali</th>
                      <th>NIK</th>
                      <th>Tanggal lahir</th>
                      <td>Pembayaran</td>
                      <th>Opsi</th>
                   </tr>
                </thead>
                <tbody>
                   <?php $n = 1 ?>
                   @foreach($santri as $data)
                   <tr>
                     <td>{{ $n++ }}</td>
                     <td>{{ $data->nama_lengkap }}</td>
                     <td>{{ $data->waliSantri->nama_lengkap }}</td>
                     <td>{{ $data->nik }}</td>
                     <td>{{ tgl_indo($data->tgl_lahir) }}</td>
                     <td><a class="btn btn-xs btn-warning btn-block" href="{{ base_url('admin/santri/pembayaran/').$data->id_santri }}"><i class="fa fa-money" aria-hidden="true"></i></a></td>
                     <td>
                        <a class="btn btn-sm btn-info" href="{{ base_url('admin/santri/show/').$data->id_santri }}"><i class="fa fa-eye"></i>&nbsp;Detail</a>
                        <a href="{{ base_url('admin/santri/print/').$data->id_santri }}" class="btn btn-sm btn-info"><i class="fa fa-print"></i>&nbsp;</a>
                        <a href="{{ base_url('admin/santri/destroy/').$data->id_santri }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
</div>
@stop
