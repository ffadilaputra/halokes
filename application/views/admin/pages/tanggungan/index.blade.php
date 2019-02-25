@extends('admin.template')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">
       Tanggungan
    </h1>
    <a href="{{ base_url('admin/Tanggungan/create') }}" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Create</a>
    <br><br>
 </div>
</div>
<div class="row">
<div class="panel panel-default">
   <div class="panel-heading">
      <h3 class="panel-title">
         <i class="fa fa-money fa-fw"></i>Transactions Panel
      </h3>
   </div>
<div class="panel-body">
  <div class="col-lg-12">
    <table class="table" id="main">
      <thead>
         <tr>
            <th>No</th>
            <th>Nama Santri</th>
            <th>Tahun Akademik</th>
            <th>Jenis</th>
            <th>Nominal</th>
            <th>Biaya harus dibayar</th>
            <th>Status</th>
            <th>Option</th>
         </tr>
      </thead>
      <tbody>
         <?php $no=1; ?>
         @foreach($list as $data)
         <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->detailSantri->nama_lengkap }}</td>
            <td>{{ $data->detailTahun->nama }}</td>
            <td>{{ $data->category->nama }}</td>
            <td>{{ convertRupiah($data->nominal) }}</td>
            <td>{{ convertRupiah($data->biaya_harusdibayar) }}</td>
            @if($data->nominal == $data->biaya_harusdibayar)
            <td><span class="label label-success">Lunas</span></td>
            @else
            <td><span class="label label-danger">Belum Lunas</span></td>
            @endif
            <td>
               <a class="btn btn-xs btn-primary" href="{{ base_url('admin/tanggungan/edit/'.$data->id_tanggugan_pembayaran) }}"><i class="fa fa-pencil"></i></a>
               <a class="btn btn-xs btn-danger" href="{{ base_url('admin/tanggungan/delete/').$data->id_tanggugan_pembayaran }}"><i class="fa fa-trash"></i></a>
               <a class="btn btn-xs btn-info" href="{{ base_url('admin/pembayaran/nota/').$data->id_santri }}"><i class="fa fa-print"></i></a>
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
