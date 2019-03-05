@extends('admin.layouts.sidebar')

@section('content')
<main class="main">
    <div class="containter-fluid">
    <div class="row">
        <div class="col-md-10">
          <br>
            <div class="card">
              <div class="card-body">
              <div class="form-group">
              <a href="{{ base_url('ElemenKopetensi/create') }}" class="btn btn-square btn-primary"><i class="fa fa-plus"></i> Elemen Kopetensi</a>
              </div>
              <table class="table" id="main">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Judul Elemen</th>
                      <th scope="col">Kode Unit</th>
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
                      <td>{{ $data->judu_elemen }}</td>
                      <td>{{ $data->detailKodeUnit->kode_unit }}</td>
                      <td>
                        <a class="btn btn-primary" href="{{ base_url('ElemenKopetensi/create/'.$data->id_elemen) }}"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger" href="{{ base_url('ElemenKopetensi/delete/'.$data->id_elemen) }}"><i class="fa fa-trash"></i></a>
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
