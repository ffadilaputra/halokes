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
  <div class="col-lg-12">
    <table class="table" id="main">
      <thead>
         <tr>
            <th>No</th>
            <th>Nama Santri</th>
            <th>Tahun Akademik</th>
            <th>Kategori Keuangan</th>
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
            <td>
               <a class="btn btn-primary" href="{{ base_url('admin/tanggungan/edit/'.$data->id_tanggugan_pembayaran) }}"><i class="fa fa-pencil"></i></a>
               <a class="btn btn-danger" href="{{ base_url('admin/tanggungan/delete/').$data->id_tanggugan_pembayaran }}"><i class="fa fa-trash"></i></a>
               <a class="btn btn-info" href="{{ base_url('admin/pembayaran/nota/').$data->id_santri }}"><i class="fa fa-print"></i></a>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
  </div>
</div>
@stop
