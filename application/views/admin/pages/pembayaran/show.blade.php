@extends('admin.template')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
          Pembayaran
        </h1>
    </div>
</div>
<div class="panel panel-default">
      <div class="panel-heading">
        <div class="row">
          <div class="col-lg-12">
              <h2>Detail Pembayaran Santri</h2>
              <hr>
              <div class="col-lg-6">
                  <div class="form-group">
                      <label>Nama Lengkap</label>
                      <h2> {{ $santri->pembayaranSantri->nama_lengkap }}</h2>
                  </div>
                  <div class="form-group">
                    <label>Status Pembayaran</label>
                    <h2> {{ $santri->status_pembayaran }}</h2>
                </div>
                <div class="form-group">
                    <label>Bukti Pembayaran</label><br>
                    <img alt="{{ $santri->bukti_pembayaran }}" class="img-thumbnail" src="{{ base_url('assets/uploads/').$santri->bukti_pembayaran }}" alt="">
                </div>
              </div>
              <div class="col-lg-6">
                  <div class="form-group">
                      <label>Nomor Induk Keluarga</label>
                      <h2> {{ $santri->pembayaranSantri->nik }}</h2>
                  </div>
                  <div class="form-group">
                      <label>NIS</label>
                      <h2> {{ $santri->pembayaranSantri->nis }}</h2>
                  </div>
              </div>
          </div>
        </div>
      </div>
</div>
@stop
