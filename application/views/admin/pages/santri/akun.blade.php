@extends('admin.template')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">
      Akun santri
    </h1>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">
          <i class="fa fa-book" aria-hidden="true"></i>Keterangan Akun Santri
        </h3>
        <br>
        <p>Password akun santri berformat <b>Tahun Bulan Tanggal dan inisial nama depan 2 huruf</b>
          <br>Contoh : <b>20190820AD</b>
        </p>
      </div>
      <div class="panel-body">
        <form class="" action="{{base_url('admin/GenerateLogin/store')}}" method="post">
        <div class="table-responsive">
          <table id="main" class="table table-bordered table-hover table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Virtual Akun</th>
                <th>Nama Lengkap</th>
                <th>Tanggal lahir</th>
                <th>Password</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              @foreach($guest as $data)
              <tr>
                <td>
                  {{ $no++ }}
                </td>
                <td>{{ $data->detailSantri->virtualAkun->no_virtual_account }}</td>
                <td>{{ $data->detailSantri->nama_lengkap }}</td>
                <td>{{ tgl_indo($data->detailSantri->tgl_lahir) }}</td>
                <td>
                  @if($data->password)
                  <p>Ya</p>
                  @else
                  <p>Tidak</p>
                  @endif
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
@stop
