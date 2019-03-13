@extends('admin.template')
@section('content')
<div class="row">
<div class="col-lg-12">
   <h1 class="page-header">
      Pengumuman
   </h1>
   <a href="{{ base_url('admin/pengumuman/create') }}" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Create</a>
   <br><br>
</div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
               <h3 class="panel-title">
                  <i class="fa fa-book" aria-hidden="true"></i> Data Pengumuman
               </h3>
            </div>
            <div class="panel-body">
      <table class="table" id="main">
        <thead>
           <tr>
              <th>No</th>
              <th>Pengumuman</th>
              <th>Keterangan</th>
              <th>Opsi</th>
           </tr>
        </thead>
        <tbody>
           <?php $no=1; ?>
           @foreach($list as $data)
           <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $data->pengumuman }}</td>
              <td>{{ $data->keterangan }}</td>
              <td>
                 <a class="btn btn-primary" href="{{ base_url('admin/pengumuman/create/').$data->id_pengumuman }}"><i class="fa fa-pencil"></i></a>
                 <a class="btn btn-danger" href="{{ base_url('admin/pengumuman/delete/').$data->id_pengumuman }}"><i class="fa fa-trash"></i></a>
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
