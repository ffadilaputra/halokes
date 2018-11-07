@extends('admin.template')

@section('content')
<a href="{{ base_url('admin/pendidikan/create') }}" class="btn btn-primary">Tambah Riwayat Pendidikan</a>
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Pendidikan Terakhir</th>
        <th>Option</th>
      </tr>
    </thead>
    <tbody>
      <?php $no=1; ?>
      @foreach($list as $data)
      <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $data->pendidikan_terakhir }}</td>
        <td>
          <a class="btn btn-default" href="{{ base_url('admin/pendidikan/edit/').$data->id_pen_terakhir }}"><i class="fa fa-pencil"></i></a>
          <a class="btn btn-default" href="{{ base_url('admin/pendidikan/delete/').$data->id_pen_terakhir }}"><i class="fa fa-trash"></i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@stop

<!-- jQuery -->
<script src="{{ base_url('assets/sb-admin/') }}js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ base_url('assets/sb-admin/') }}js/bootstrap.min.js"></script>
<script src="{{ base_url('assets/sb-admin/') }}js/jquery.dataTables.min.js"></script>
<script src="{{ base_url('assets/sb-admin/') }}js/dataTables.bootstrap.min.js"></script>
