@extends('admin.template')
@section('content')
<div class="col-lg-12">
   <h1 class="page-header">
      Kategori Keuangan
   </h1>
   <a href="{{ base_url('admin/KategoriKeuangan/create') }}" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Create</a>
   <br><br>
</div>
<table class="table" id="main">
   <thead>
      <tr>
         <th>No</th>
         <th>Kategori Keuangan</th>
         <th>Nominal</th>
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
         <td>{{ convertRupiah($data->biaya) }}</td>
         <td>{{ $data->tahun_akademik }}</td>
         <td>
            <a class="btn btn-primary" href="{{ base_url('admin/KategoriKeuangan/edit/').$data->id_kategori_keuangan }}"><i class="fa fa-pencil"></i></a>
            <a class="btn btn-danger" href="{{ base_url('admin/KategoriKeuangan/delete/').$data->id_kategori_keuangan }}"><i class="fa fa-trash"></i></a>
         </td>
      </tr>
      @endforeach
   </tbody>
</table>
@stop
