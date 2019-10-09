@extends('admin.template')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">
      Data semua santri
    </h1>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="panel-body">
          <h4><b>Cari Berdasarkan</b></h4> <hr>
          <form action="{{ base_url('admin/Santri/cariSantri') }}" method="post">
            <div class="form-group col-md-3">
              <select class="form-control" name="jenjang">
                <option value="mt">Madarasah Tsanawiyah</option>
                <option value="ma">Madarasah Aliyah</option>
                <option value="md">Madarasah Diniyah</option>
              </select>
            </div>
            <div class="form-group col-md-3">
              <select class="form-control" name="jenis_kelamin">
                <option value="laki-laki">Putra</option>
                <option value="perempuan">Putri</option>
              </select>
            </div>
            <div class="form-group col-md-3">
              <select class="form-control" name="tahun_akademik">
                <option value="">Kelas 7</option>
                <option value="">Kelas 8</option>
                <option value="">Kelas 9</option>
                <option value="">Kelas 10</option>
                <option value="">Kelas 11</option>
                <option value="">Kelas 12</option>
                <option value="">Madin</option>
              </select>
            </div>
            <div class="form-group col-md-3">
              <input type="submit" class="btn btn-primary" value="Submit">
            </div>
          </form>
        </div>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table id="main" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <td>Nomor Virtual Akun</td>
                <td>Nama Lengkap</td>
                <td>Jenjang</td>
                <td>Tanggal Lahir</td>
                <td>Jenis Kelamin</td>
                <td>Status Akun</td>
                <td>Opsi</td>
              </tr>
            </thead>
            <tbody>
              <?php $n = 1 ?>
              @foreach($santri as $item)
              <tr>
                <td>{{ $n++ }}</td>
                <td>{{ $item->virtualAkun->no_virtual_account }}</td>
                <td>{{ $item->nama_lengkap }} </td>
                <td>
                  <?php
                  $jenjang = '';
                  if($item->tingkat_pendidikan == 'mt'){
                    $jenjang = 'Madarasah Tsanawiyah';
                  }elseif($item->tingkat_pendidikan == 'ma'){
                    $jenjang = 'Madarasah Aliyah';
                  }elseif($item->tingkat_pendidikan == 'md'){
                    $jenjang = 'Madarasah Diniyah';
                  } ?>
                  {{ $jenjang }}</td>
                  <td>{{ tgl_indo($item->tgl_lahir) }}</td>
                  <td>{{ $item->jenis_kelamin }}</td>
                  <td><span class="label label-success">{{ $item->status_verifikasi }}</span></td>
                  <td>
                    <a class="btn btn-sm btn-warning" href="{{ base_url('admin/santri/pembayaran/').$item->id_santri }}">Keuangan</a>
                    <a class="btn btn-sm btn-success" href="{{ base_url('admin/santri/show/').$item->id_santri }}">Profil</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  @stop
