@extends('admin.template')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">
      Data Berita
    </h1>
    <ol class="breadcrumb">
      <li class="active">
        <i class="fa fa-dashboard"></i>Dashboard
      </li>
    </ol>
  </div>
  <div class="col-lg-12">
    <div class="form-group">
        <a href="{{ base_url('admin/kategoriberita/create') }}" class="btn btn-primary">Tambah Kategori berita</a>
    </div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Kategori Berita</th>
          <th>Option</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; ?> @foreach($list as $data)
        <tr>
          <td>{{ $no++ }}</td>
          <td>{{ $data->category_name }}</td>
          <td>
            <a class="btn btn-default" href="{{ base_url('admin/kategoriberita/edit/').$data->id_news_category }}"><i class="fa fa-pencil"></i></a>
            <a class="btn btn-default" href="{{ base_url('admin/kategoriberita/delete/').$data->id_news_category }}"><i class="fa fa-trash"></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>


@stop

<!-- jQuery -->
<script src="{{ base_url('assets/sb-admin/') }}js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ base_url('assets/sb-admin/') }}js/bootstrap.min.js"></script>
<script src="{{ base_url('assets/sb-admin/') }}js/jquery.dataTables.min.js"></script>
<script src="{{ base_url('assets/sb-admin/') }}js/dataTables.bootstrap.min.js"></script>