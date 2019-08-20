@extends('admin.template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
           Guru Mata Pelajaran
        </h1>
        <a href="{{ base_url('admin/GuruMatpel/create') }}" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Masukkan Data</a>
        <br><br>
     </div>
</div>
<div class="row">
  <div class="col-lg-12">
      <div class="panel panel-default">
          <div class="panel-heading">
             <h3 class="panel-title">
                <i class="fa fa-book" aria-hidden="true"></i> Guru Mata Pelajaran
             </h3>
          </div>
          <div class="panel-body">
      <table class="table" id="main">
          <thead>
             <tr>
                <th>No</th>
                <th>Nama Guru</th>
                <th>Nama Kelas</th>
                <th>Mata Pelajaran</th>
                <th>Option</th>
             </tr>
          </thead>
          <tbody>
             <?php $no=1; ?>
             @foreach($guru as $data)
             <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->detailGuru->detailGuru->nama_lengkap }}</td>
                <td>{{ $data->detailMasterKelas->nama_kelas }}</td>
                <td>{{ $data->detailMatpel->nama_matpel }}</td>
                <td>
                   <a class="btn btn-sm btn-warning" href="{{ base_url('admin/GuruMatpel/show/').$data->id_gurumatpel }}"><i class="fa fa-eye"></i></a>
                   <a class="btn btn-sm btn-primary" href="{{ base_url('admin/GuruMatpel/create/').$data->id_gurumatpel }}"><i class="fa fa-pencil"></i></a>
                   <a class="btn btn-sm btn-danger" href="{{ base_url('admin/GuruMatpel/delete/').$data->id_gurumatpel }}"><i class="fa fa-trash"></i></a>
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
