@extends('admin.template')
@section('content')
<div class="col-lg-12">
   <h1 class="page-header">
      Input Absensi Santri
   </h1>
   <!-- <a href="{{ base_url('admin/Jurusan/create') }}" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Create</a>
   <br><br> -->
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
               <h3 class="panel-title">
                  <i class="fa fa-book" aria-hidden="true"></i> Absensi Santri
               </h3>
            </div>
            <div class="panel-body">
        <table class="table" id="main">
            <thead>
               <tr>
                  <th>No</th>
                  <th>Nama Kelas</th>
                  <th>Option</th>
               </tr>
            </thead>
            <tbody>
               <?php $no=1; ?>
               @foreach($kelas as $data)
               <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $data->nama_kelas }}</td>
                  <td>
                     <a class="btn btn-sm btn-primary" href="{{ base_url('admin/absensisiswa/create/').$data->id_masterkelas }}"><i class="fa fa-pencil"></i></a>
                     <!-- <a class="btn btn-sm btn-danger" href="{{ base_url('admin/penempatansiswa/delete/').$data->id_jurusan }}"><i class="fa fa-trash"></i></a> -->
                  </td>
               </tr>
               @endforeach
            </tbody>
         </table>
    </div>
@stop
