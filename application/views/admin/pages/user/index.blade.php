@extends('admin.template')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">
      Pegawai / Operator
    </h1>
  </div>
  <br>
</div>
<div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-heading">
      <a href="{{ base_url('admin/User/create') }}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Pegawai</a>
      <a href="{{ base_url('admin/User/createoperator') }}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Operator</a>
    </div>
    <div class="panel-body">
      <div class="table-responsive">
        <table id="main" class="table table-bordered table-hover table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Email</th>
              <th>Nama Lengkap</th>
              <th>Telepon</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody>
            <?php $n = 1 ?>
            @foreach($list as $data)
            <tr>
              <td>{{ $n++ }}</td>
              <td>{{ $data->email }}</td>
              <td>{{ $data->nama_lengkap }}</td>
              <td>{{ $data->telepon }}</td>
              <td>
                <a class="btn btn-xs btn-warning" href="{{ base_url('admin/user/show/').$data->id_users }}">Profil</a>
                <a class="btn btn-xs btn-primary" href="{{ base_url('admin/user/edit/').$data->id_users }}">Edit</a>
                <a class="btn btn-xs btn-danger" href="{{ base_url('admin/user/delete/').$data->id_users }}">Delete</a>
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

@section('scripts')
<!-- jQuery -->
<script src="{{ base_url('assets/sb-admin/') }}js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ base_url('assets/sb-admin/') }}js/bootstrap.min.js"></script>
<script src="{{ base_url('assets/sb-admin/') }}js/jquery.dataTables.min.js"></script>
<script src="{{ base_url('assets/sb-admin/') }}js/dataTables.bootstrap.min.js"></script>
<script>
$(document).ready(()=> {
  $('#main').DataTable();
})
</script>
@stop
