@extends('admin.template')
@section('content')

<div class="row">

<!-- wali -->
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Data Wali</h4>
        </div>
        <div class="panel-body">
            <h4><b>Data Pribadi</b></h4>
          <hr>
          <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" name="" class="form-control" id="" value="{{ $wali->nama_lengkap }}">
          </div>
          <div class="form-group">
              <label>Panggilan</label>
              <input type="text" name="" class="form-control" id="" value="{{ $wali->panggilan }}">
          </div>
          <div class="form-group">
              <label>NIK</label>
              <input type="text" name="" class="form-control" id="" value="{{ $wali->nik }}">
          </div>
          <div class="form-group">
              <label>Tanggal Lahir</label>
              <input type="text" name="" class="form-control" id="" value="{{ $wali->tgl_lahir }}">
          </div>
          <h4><b>Alamat Lengkap</b></h4>
          <hr>
          <div class="form-group">
              <label>Provinsi</label>
              <input type="text" name="" class="form-control" id="" value="{{ $wali->provinsi }}">
          </div>
          <div class="form-group">
              <label>Kota</label>
              <input type="text" name="" class="form-control" id="" value="{{ $wali->kota }}">
          </div>
          <div class="form-group">
              <label>Alamat Lengkap</label>
              <input type="text" name="" class="form-control" id="" value="{{ $wali->alamat }}">
          </div>
          <h4><b>Pendidikan dan Pekerjaan</b></h4>
          <hr>
          <div class="form-group">
              <label>Pendidikan Terakhir</label>
              <input type="text" name="" class="form-control" id="" value="{{ $wali->pendidikan }}">
          </div>
          <div class="form-group">
              <label>Pekerjaan saat ini</label>
              <input type="text" name="" class="form-control" id="" value="{{ $wali->pekerjaan }}">
          </div>
          <div class="form-group">
              <label>Penghasilan perbulan</label>
              <input type="text" name="" class="form-control" id="" value="{{ $wali->penghasilan }}">
          </div>
          <h4><b>Status</b></h4>
          <hr>
          <div class="form-group">
              <label>Hubungan wali dengan santri</label>
              <input type="text" name="" class="form-control" id="" value="{{ $wali->hbgn_wali_santri }}">
          </div>
          <div class="form-group">
              <label>Status wali</label>
              <input type="text" name="" class="form-control" id="" value="{{ $wali->status_wali }}">
          </div>
        </div>
    </div>

    <!-- Split button -->
</div>

</div>
@stop

