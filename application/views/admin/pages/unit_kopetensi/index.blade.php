@extends('admin.layouts.sidebar')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item">
      <a href="#">Unit Kopetensi</a>
    </li>
    <li class="breadcrumb-item active">Dashboard</li>
    <!-- Breadcrumb Menu-->
  </ol>
    <div class="containter-fluid">
    <div class="row">
        <div class="container">
            <div class="col-md-10">
                <div class="card">
                  <div class="card-body">
                  <div class="form-group">
                  <a href="{{ base_url('UnitKopetensi/create') }}" class="btn btn-square btn-primary"><i class="fa fa-plus"></i> Unit Kopetensi</a>
                  </div>
                  <table class="table" id="main">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Kode Unit</th>
                          <th scope="col">Judul Unit</th>
                          <th scope="col">Nama Skema</th>
                          <th scope="col">Opsi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                        $no=1;
                        @endphp
                        @foreach($list as $data)
                        <tr>
                          <th scope="row">{{ $no++ }}</th>
                          <td>{{ $data->kode_unit }}</td>
                          <td>{{ $data->judul_unit }}</td>
                          <td>{{ $data->detailSkema->nama_skema }}</td>
                          <td>
                            <a class="btn btn-primary" href="{{ base_url('UnitKopetensi/create/'.$data->kode_unit) }}"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-danger" href="{{ base_url('UnitKopetensi/delete/'.$data->kode_unit) }}"><i class="fa fa-trash"></i></a>
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
