@extends('admin.template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
           Master Guru
        </h1>
        <a href="{{ base_url('admin/guru/create') }}" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Masukkan Data</a>
        <br><br>
     </div>
</div>
<div class="row">
  <div class="col-lg-12">
      <div class="panel panel-default">
          <div class="panel-heading">
             <h3 class="panel-title">
                <i class="fa fa-book" aria-hidden="true"></i> Data Guru
             </h3>
          </div>
          <div class="panel-body">
      <table class="table" id="main">
          <thead>
             <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Tanggal Masuk</th>
                <th>Jabatan</th>
                <th>Mata Pelajaran</th>
                <th>Option</th>
             </tr>
          </thead>
          <tbody>
             <?php $no=1; ?>
             @foreach($guru as $data)
             <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->detailGuru->nama_lengkap }}</td>
                <td>{{ tgl_indo($data->tgl_masuk) }}</td>
                <td>{{ $data->jabatan }}</td>
                <td>{{ $data->matpel }}</td>
                <td>
                   <a class="btn btn-sm btn-warning" href="{{ base_url('admin/user/show/').$data->id_users }}"><i class="fa fa-user"></i></a>
                   <a class="btn btn-sm btn-primary" href="{{ base_url('admin/guru/create/').$data->id_guru }}"><i class="fa fa-pencil"></i></a>
                   <a class="btn btn-sm btn-danger" href="{{ base_url('admin/guru/delete/').$data->id_guru }}"><i class="fa fa-trash"></i></a>
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
