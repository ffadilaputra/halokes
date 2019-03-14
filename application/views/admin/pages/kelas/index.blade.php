@extends('admin.template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
           Master Kelas
        </h1>
        <a href="{{ base_url('admin/kelas/create') }}" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Masukkan Data</a>
        <br><br>
     </div>
</div>
<div class="row">
  <div class="col-lg-12">
      <div class="panel panel-default">
          <div class="panel-heading">
             <h3 class="panel-title">
                <i class="fa fa-book" aria-hidden="true"></i> Data Kelas
             </h3>
          </div>
          <div class="panel-body">
      <table class="table" id="main">
          <thead>
             <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Jenjang</th>
                <th>Kode Ruangan</th>
                <th>Ukuran Ruangan</th>
                <th>Wali Kelas</th>
                <th>Opsi</th>
             </tr>
          </thead>
          <tbody>
             <?php $no=1; ?>
             @foreach($kelas as $data)
             <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->nama_kelas }}</td>
                <td>{{ $data->jenjang }}</td>
                <td>{{ $data->kode_ruangan }}</td>
                <td>{{ $data->ukuran_ruangan }}</td>
                <td><a href="#">{{ $data->detailWaliKelas->detailGuru->nama_lengkap }}</a></td>
                <td>
                   <a class="btn btn-sm btn-primary" href="{{ base_url('admin/kelas/create/').$data->id_masterkelas }}"><i class="fa fa-pencil"></i></a>
                   <a class="btn btn-sm btn-danger" href="{{ base_url('admin/kelas/delete/').$data->id_masterkelas }}"><i class="fa fa-trash"></i></a>
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
