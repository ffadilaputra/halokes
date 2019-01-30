@extends('admin.template')

  @section('content')
  <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">
          Dashboard
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
              <i class="fa fa-money fa-fw"></i>Transactions Panel</h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table id="main" class="table table-bordered table-hover table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Email</th>
                    <th>Nama Lengkap</th>
                    <th>Tempat Lahir</th>
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
                    <td>{{ $data->tempat_lahir }}</td>
                    <td>{{ $data->telepon }}</td>
                    <td>
                      <a class="btn btn-warning" href="{{ base_url('admin/user/show/').$data->id_users }}"><i class="fa fa-eye"></i></a>
                      <a class="btn btn-primary" href="{{ base_url('admin/user/edit/').$data->id_users }}"><i class="fa fa-pencil"></i></a>
                      <a class="btn btn-danger" href="{{ base_url('admin/user/delete/').$data->id_users }}"><i class="fa fa-trash"></i></a>
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
