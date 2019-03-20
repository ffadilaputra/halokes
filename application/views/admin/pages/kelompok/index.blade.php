@extends('admin.template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
           Kelola Kelompok
        </h1>
     </div>
</div>
<div class="row">
  <div class="col-lg-8">
      <div class="panel panel-default">
          <div class="panel-heading">
             <h3 class="panel-title">
                <a href="{{ base_url('admin/kelompok/create_a') }}" class="text-default btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i>Data Kelompok A</a>
             </h3>
          </div>
          <div class="panel-body">
      <table class="table table-responsive" id="main">
          <thead>
             <tr>
                <th>No</th>
                <th>Mata Pelajaran</th>
                <th>Jenjang</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Opsi</th>
             </tr>
          </thead>
          <tbody>
             <?php $no=1; ?>
             @foreach($kelompok as $data)
             <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->nama_matpel }}</td>
                <td>{{ $data->detailMatpel->jenjang }}</td>
                <td>{{ $data->detailMatpel->detailKelas->nama_kelas }}</td>
                <td>{{ $data->detailMatpel->detailJurusan->nama_jurusan }}</td>
                <td>
                   <a class="btn btn-sm btn-primary" href="{{ base_url('admin/kelompok/create_a/').$data->id_kelompok_a }}"><i class="fa fa-pencil"></i></a>
                   <a class="btn btn-sm btn-danger" href="{{ base_url('admin/kelompok/delete_kelompok_a/').$data->id_kelompok_a }}"><i class="fa fa-trash"></i></a>
                </td>
             </tr>
             @endforeach
          </tbody>
       </table>
          </div>
      </div>
      </div>
</div>

<div class="row">
   <div class="col-lg-8">
       <div class="panel panel-default">
           <div class="panel-heading">
              <h3 class="panel-title">
                 <a href="{{ base_url('admin/kelompok/create_b') }}" class="text-default btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i>Data Kelompok B</a>
              </h3>
           </div>
           <div class="panel-body">
       <table class="table table-responsive" id="main">
           <thead>
              <tr>
                 <th>No</th>
                 <th>Mata Pelajaran</th>
                 <th>Jenjang</th>
                 <th>Kelas</th>
                 <th>Jurusan</th>
                 <th>Opsi</th>
              </tr>
           </thead>
           <tbody>
              <?php $no=1; ?>
              @foreach($kelompok_b as $data)
              <tr>
                 <td>{{ $no++ }}</td>
                 <td>{{ $data->nama_matpel }}</td>
                 <td>{{ $data->detailMatpel->jenjang }}</td>
                 <td>{{ $data->detailMatpel->detailKelas->nama_kelas }}</td>
                 <td>{{ $data->detailMatpel->detailJurusan->nama_jurusan }}</td>
                 <td>
                    <a class="btn btn-sm btn-primary" href="{{ base_url('admin/kelompok/create_b/').$data->id_kelompok_b }}"><i class="fa fa-pencil"></i></a>
                    <a class="btn btn-sm btn-danger" href="{{ base_url('admin/kelompok/delete_kelompok_b/').$data->id_kelompok_b }}"><i class="fa fa-trash"></i></a>
                 </td>
              </tr>
              @endforeach
           </tbody>
        </table>
           </div>
       </div>
       </div>
 </div>


 <div class="row">
   <div class="col-lg-8">
       <div class="panel panel-default">
           <div class="panel-heading">
              <h3 class="panel-title">
                 <a href="{{ base_url('admin/kelompok/create_c') }}" class="text-default btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i>Data Kelompok C</a>
              </h3>
           </div>
           <div class="panel-body">
       <table class="table table-responsive" id="main">
           <thead>
              <tr>
                 <th>No</th>
                 <th>Mata Pelajaran</th>
                 <th>Jenjang</th>
                 <th>Kelas</th>
                 <th>Jurusan</th>
                 <th>Opsi</th>
              </tr>
           </thead>
           <tbody>
              <?php $no=1; ?>
              @foreach($kelompok_c as $data)
              <tr>
                 <td>{{ $no++ }}</td>
                 <td>{{ $data->nama_matpel }}</td>
                 <td>{{ $data->detailMatpel->jenjang }}</td>
                 <td>{{ $data->detailMatpel->detailKelas->nama_kelas }}</td>
                 <td>{{ $data->detailMatpel->detailJurusan->nama_jurusan }}</td>
                 <td>
                    <a class="btn btn-sm btn-primary" href="{{ base_url('admin/kelompok/create_c/').$data->id_kelompok_c }}"><i class="fa fa-pencil"></i></a>
                    <a class="btn btn-sm btn-danger" href="{{ base_url('admin/kelompok/delete_kelompok_c/').$data->id_kelompok_c }}"><i class="fa fa-trash"></i></a>
                 </td>
              </tr>
              @endforeach
           </tbody>
        </table>
           </div>
       </div>
       </div>
 </div>

 <div class="row">
   <div class="col-lg-8">
       <div class="panel panel-default">
           <div class="panel-heading">
              <h3 class="panel-title">
                 <a href="{{ base_url('admin/kelompok/create_d') }}" class="text-default btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i>Data Kelompok D</a>
              </h3>
           </div>
           <div class="panel-body">
       <table class="table table-responsive" id="main">
           <thead>
              <tr>
                 <th>No</th>
                 <th>Mata Pelajaran</th>
                 <th>Jenjang</th>
                 <th>Kelas</th>
                 <th>Jurusan</th>
                 <th>Opsi</th>
              </tr>
           </thead>
           <tbody>
              <?php $no=1; ?>
              @foreach($kelompok_d as $data)
              <tr>
                 <td>{{ $no++ }}</td>
                 <td>{{ $data->nama_matpel }}</td>
                 <td>{{ $data->detailMatpel->jenjang }}</td>
                 <td>{{ $data->detailMatpel->detailKelas->nama_kelas }}</td>
                 <td>{{ $data->detailMatpel->detailJurusan->nama_jurusan }}</td>
                 <td>
                    <a class="btn btn-sm btn-primary" href="{{ base_url('admin/kelompok/create_d/').$data->id_kelompok_d }}"><i class="fa fa-pencil"></i></a>
                    <a class="btn btn-sm btn-danger" href="{{ base_url('admin/kelompok/delete_kelompok_d/').$data->id_kelompok_d }}"><i class="fa fa-trash"></i></a>
                 </td>
              </tr>
              @endforeach
           </tbody>
        </table>
           </div>
       </div>
       </div>
 </div>

 <div class="row">
   <div class="col-lg-8">
       <div class="panel panel-default">
           <div class="panel-heading">
              <h3 class="panel-title">
                 <a href="{{ base_url('admin/kelompok/create_e') }}" class="text-default btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i>Data Kelompok E</a>
              </h3>
           </div>
           <div class="panel-body">
       <table class="table table-responsive" id="main">
           <thead>
              <tr>
                 <th>No</th>
                 <th>Mata Pelajaran</th>
                 <th>Jenjang</th>
                 <th>Kelas</th>
                 <th>Jurusan</th>
                 <th>Opsi</th>
              </tr>
           </thead>
           <tbody>
              <?php $no=1; ?>
              @foreach($kelompok_e as $data)
              <tr>
                 <td>{{ $no++ }}</td>
                 <td>{{ $data->nama_matpel }}</td>
                 <td>{{ $data->detailMatpel->jenjang }}</td>
                 <td>{{ $data->detailMatpel->detailKelas->nama_kelas }}</td>
                 <td>{{ $data->detailMatpel->detailJurusan->nama_jurusan }}</td>
                 <td>
                    <a class="btn btn-sm btn-primary" href="{{ base_url('admin/kelompok/create_e/').$data->id_kelompok_e }}"><i class="fa fa-pencil"></i></a>
                    <a class="btn btn-sm btn-danger" href="{{ base_url('admin/kelompok/delete_kelompok_e/').$data->id_kelompok_e }}"><i class="fa fa-trash"></i></a>
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
