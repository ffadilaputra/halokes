@extends('admin.template')
@section('content')
<div class="col-lg-12">
   <h1 class="page-header">
      Laporan Syahriyah
   </h1>
</div>
<table class="table" id="main">
   <thead>
      <tr>
         <th>No.</th>
         <th>Nomor VA Santri</th>
         <th>Nama Santri</th>
         <th>Tanggal</th>
         <th>Option</th>
      </tr>
   </thead>
   <tbody>
      <?php $no=1; ?>
      @foreach($spp as $data)
      <tr>
         <td>{{ $no++ }}</td>
         <td>{{ $data->detailSantri->virtualAkun->no_virtual_account }}</td>
         <td>{{ $data->detailSantri->nama_lengkap }}</td>
         <td>{{ $data->created_at->format('d-m-Y h:i:s') }}</td>
         <td>
            <a class="btn btn-primary" href="{{ base_url('admin/pembayaran/spp_create/').$data->id_spp }}"><i class="fa fa-pencil"></i></a>
            <a class="btn btn-danger" href="{{ base_url('admin/pembayaran/spp_delete/').$data->id_spp }}"><i class="fa fa-trash"></i></a>
         </td>
      </tr>
      @endforeach
   </tbody>
</table>
@stop
