@extends('admin.layouts.sidebar')
@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item">
      <a href="{{ base_url('pemohon') }}">Admin</a>
    </li>
    <li class="breadcrumb-item active">Pemohon</li>
  </ol>
    <div class="containter-fluid">
    <div class="row">
        <div class="container">
            <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                  <h1 class="docs-title">Data Pemohon</h1>
                  <table id="main" class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nama Lengkap</th>
                          <th scope="col">Jenis Kelamin</th>
                          <th scope="col">Telepon</th>
                          <th scope="col">Email</th>
                          <th scope="col">Status Akun</th>
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
                          <td>{{ $data->nama_lengkap }}</td>
                          <td>{{ $data->jenis_kelamin }}</td>
                          <td>{{ $data->telepon }}</td>
                          <td>{{ $data->email }}</td>
                            @if($data->status_akun == 'belum_aktif')
                              <td><span class="badge badge-danger">Belum Aktif</span></td>
                            @else
                              <td><span class="badge badge-success">Aktif</span></td>
                            @endif
                          <td>
                              <a class="btn btn-sm btn-success" href="{{ base_url('skema/create/'.$data->no_skema) }}"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-sm btn-primary" href="{{ base_url('skema/create/'.$data->no_skema) }}"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-sm btn-danger" href="{{ base_url('skema/delete/'.$data->no_skema) }}"><i class="fa fa-trash"></i></a>
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
