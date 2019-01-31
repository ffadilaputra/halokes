@extends('admin.template')
@section('content')

<div class="row">

  <div class="col-md-8">
    <div class="panel panel-default">
    <div class="panel-heading">Pendidikan Terakhir <a class="btn btn-info" href="{{ base_url('admin/pendidikan/pendidikan_edit/').$edu->id_siswa }}">Ubah</a></div>
        <div class="panel-body">
          <h3>Data Sekolah siswa</h3>
          <hr>
          <div class="form-group">
              <label>Nama Sekolah</label>
              <h4> {{ $edu->nama_sekolah_siswa }} </h4>
          </div>
          <div class="form-group">
              <label>Jenis Sekolah siswa</label>
              <h4> {{ $edu->jenis_sekolah_siswa }} </h4>
          </div>
          <div class="form-group">
              <label>Status Sekolah siswa</label>
              <h4> {{ $edu->status_sekolah_siswa }} </h4>
          </div>
          <div class="form-group">
              <label>Alamat Sekolah siswa</label>
              <h4> {{ $edu->alamat_sekolah_siswa }} </h4>
          </div>
          <div class="form-group">
              <label>Provinsi Sekolah siswa</label>
              <h4> {{ $edu->provinsi_siswa }} </h4>
          </div>
        </div>
    </div>

    <!-- Split button -->
</div>
<div class="col-md-4">
    <div class="panel panel-default">
        <div class="panel-heading">Nomor Sekolah dan Siswa</div>
        <div class="panel-body">
          <hr>
          <div class="form-group">
              <label>NSS</label>
              <h4> {{ $edu->nss }} </h4>
          </div>
          <div class="form-group">
              <label>NPSN</label>
              <h4> {{ $edu->npsn }} </h4>
          </div>
          <div class="form-group">
              <label>No. Seri SKHUN</label>
              <h4> {{ $edu->no_seri_skhun }} </h4>
          </div>
          <div class="form-group">
              <label>No. Peserta Ujian</label>
              <h4> {{ $edu->no_peserta_ujian }} </h4>
          </div>
    </div>
    <!-- Split button -->
</div>
</div>
@stop

