@extends('admin.template')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
          Data Santri
        </h1>
    </div>
</div>
<div class="panel panel-default">
      <div class="panel-heading">
        <div class="row">
          <div class="col-lg-12">
              <h2>Data Diri</h2>
              <hr>
              <div class="col-lg-6">
                  <div class="form-group">
                      <label>Nama Lengkap</label>
                      <h2> {{ $santri->nama_lengkap }}</h2>
                  </div>
                  <div class="form-group">
                      <label>Nama Panggilan</label>
                      <h2> {{ $santri->panggilan }}</h2>
                  </div>
                  <div class="form-group">
                      <label>Tanggal Lahir</label>
                      <h2> {{ $santri->tgl_lahir }}</h2>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="form-group">
                      <label>Nomor Induk Keluarga</label>
                      <h2> {{ $santri->nik }}</h2>
                  </div>
                  <div class="form-group">
                      <label>NIS</label>
                      <h2> {{ $santri->nis }}</h2>
                  </div>
              </div>
          </div>
          <div class="col-lg-12">
            <h2>Alamat</h2>
            <hr>
              <div class="col-md-6">
                  <div class="form-group">
                      <label>Provinsi</label>
                      <h2> {{ $santri->panggilan }}</h2>
                  </div>
                  <div class="form-group">
                      <label>Kota</label>
                      <h2> {{ $santri->kota }}</h2>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label>Kecamatan</label>
                      <h2> {{ $santri->kecamatan }}</h2>
                  </div>
                  <div class="form-group">
                      <label>Kode Pos</label>
                      <h2> {{ $santri->kode_pos }}</h2>
                  </div>
              </div>
          </div>
        </div>
      </div>
</div>

@stop

{{-- INI HARUS ADA DISEMUA LAYOUT SUPAYA BIAR BISA DI KLIK DROPDOWNNYA --}}
@section('scripts')
<!-- jQuery -->
<script src="{{ base_url('assets/sb-admin/') }}js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ base_url('assets/sb-admin/') }}js/bootstrap.min.js"></script>
@stop