@extends('admin.template')
@section('content')
<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header">
         Data Kelengkapan santri
      </h1>
      <ol class="breadcrumb">
         <li class="active">
            <i class="fa fa-dashboard"></i>Dashboard
         </li>
      </ol>
   </div>
</div>
<div class="col-lg-12">
   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title">
            <i class="fa fa-file fa-fw"></i> Panel
         </h3>
      </div>
      <div class="panel-body">
         <div class="table-responsive">
            <table id="main" class="table table-bordered table-hover table-striped">
               <thead>
                  <tr>
                     <th style="width:5%">No.</th>
                     <th style="width:25%">Nama Santri</th>
                     <th>Jenis Kelamin</th>
                     <th>Tempat tgl lahir</th>
                     <th>Jenjang Madarasah</th>
                     <th style="width:20%">Opsi</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $n = 1 ?>
                  @foreach($santri as $data)
                  <tr>
                     <td>{{ $n++ }}</td>
                     <td>{{ $data->nama_lengkap }}</td>
                     <td>{{ $data->jenis_kelamin }}</td>
                     <td>{{ $data->tempat_lahir }}</td>
                     <td>
                       @if($data->tingkat_pendidikan == 'ma')
                          Madarasah Aliyah
                       @elseif($data->tingkat_pendidikan == 'mt')
                          Madarasah Tsanawiyah
                       @elseif($data->tingkat_pendidikan == 'md')
                          Madarasah Diniyah
                       @endif
                     </td>
                     <td>
                        <a class="btn btn-sm btn-warning" href="{{ base_url('admin/berkas/santri/'.$data->id_santri) }}"><i class="fa fa-user"></i></a>
                        <a class="btn btn-sm btn-primary" href="{{ base_url('admin/berkas/parents/'.$data->id_santri) }}"><i class="fa fa-users"></i></a>
                        <a class="btn btn-sm btn-info" href="{{ base_url('admin/berkas/education/'.$data->id_santri) }} "><i class="fa fa-university"></i></a>
                        <a class="btn btn-sm btn-success" href="{{ base_url('admin/berkas/archive/'.$data->id_santri) }}"><i class="fa fa-upload"></i></a>
                        <a class="btn btn-sm btn-danger" href="{{ base_url('admin/berkas/archive/'.$data->id_santri) }}"><i class="fa fa-trash"></i></a>
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
@stop

