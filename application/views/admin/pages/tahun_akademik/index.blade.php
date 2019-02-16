@extends('admin.template')
@section('content')
<div class="row">
<div class="col-lg-12">
   <h1 class="page-header">
      Master Tahun Akademik
   </h1>
   <a href="{{ base_url('admin/TahunAkademik/create') }}" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Create</a>
   <br><br>
</div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
               <h3 class="panel-title">
                  <i class="fa fa-book" aria-hidden="true"></i> Data Santri
               </h3>
            </div>
            <div class="panel-body">
      <table class="table" id="main">
        <thead>
           <tr>
              <th>No</th>
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
              <td>
                 <a class="btn btn-primary" href="{{ base_url('admin/TahunAkademik/edit/').$data->id_tahun_akademik }}"><i class="fa fa-pencil"></i></a>
                 <a class="btn btn-danger" href="{{ base_url('admin/TahunAkademik/delete/').$data->id_tahun_akademik }}"><i class="fa fa-trash"></i></a>
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
