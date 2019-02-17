@extends('admin.template')
@section('content')
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
         Data semua santri terverifikasi
      </h1>
      <ol class="breadcrumb">
         <li class="active">
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Data Santri
         </li>
      </ol>
   </div>
</div>
<div class="row">
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
                     <td>Nama Lengkap</td>
                     <td>Tempat Lahir</td>
                     <td>Tanggal Lahir</td>
                     <td>Jenis Kelamin</td>
                     <td>Status Akun</td>
                     <td>Nomor Virtual Akun</td>
                     <td>Opsi</td>
                     <td>Cetak</td>
                   </tr>
                </thead>
                <tbody>
                   <?php $n = 1 ?>
                   @foreach($santri as $item)
                   <tr>
                     <td>{{ $n++ }}</td>
                     <td>{{ $item->nama_lengkap }} </td>
                     <td>{{ $item->tempat_lahir }}</td>
                     <td>{{ tgl_indo($item->tgl_lahir) }}</td>
                     <td>{{ $item->jenis_kelamin }}</td>
                     <td><span class="label label-success">{{ $item->status_verifikasi }}</span></td>
                     <td>{{ $item->virtualAkun->no_virtual_account }}</td>
                     <td>
                           <a class="btn btn-sm btn-info" href="{{ base_url('admin/santri/show/').$item->id_santri }}"><i class="fa fa-eye"></i>&nbsp;</a>
                         @if($item->status_verifikasi == 'terverifikasi')
                         @elseif($item->status_verifikasi == 'belum_terverifikasi')
                           <a class="btn btn-sm btn-success" href="{{ base_url('admin/santri/verify/').$item->id_santri }}"><i class="fa fa-check"></i>&nbsp;</a>
                         @endif
                         <a href="{{ base_url('admin/santri/destroy/').$item->id_santri }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                     </td>
                     <td>
                     <a href="{{ base_url('admin/santri/print/').$item->id_santri }}" class="btn btn-sm btn-info"><i class="fa fa-print"></i>&nbsp;Cetak</a>
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
