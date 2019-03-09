@extends('admin.layouts.sidebar')

@section('content')
<main class="main">
    <div class="containter-fluid">
    <div class="row">
        <div class="col-md-8">
          <br>
            <div class="card">
              <div class="card-body">
              <div class="form-group">
              <a href="{{ base_url('tuk/create') }}" class="btn btn-square btn-dark"><i class="fa fa-plus"></i> TUK</a>
              </div>
              <table class="table" id="main">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Id</th>
                      <th scope="col">Nama TUK</th>
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
                      <td>{{ $data->id_tuk }}</td>
                      <td>{{ $data->nama_tuk }}</td>
                      <td>
                          <a class="btn btn-primary" href="{{ base_url('tuk/create/'.$data->id_tuk) }}"><i class="fa fa-pencil"></i></a>
                          <a class="btn btn-danger" href="{{ base_url('tuk/delete/'.$data->id_tuk) }}"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
      </div>
    </div>
    </div>
</main>
@stop
