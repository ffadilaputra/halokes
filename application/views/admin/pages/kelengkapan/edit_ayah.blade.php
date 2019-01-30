@extends('admin.template')
@section('content')

<div class="row">


<!-- ayah -->
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Data Ayah</h4>
        </div>
        <div class="panel-body">
            <h4><b>Data Pribadi</b></h4>
          <hr>
          <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" name="" class="form-control" id="" value="{{ $ayah->nama_lengkap }}">
          </div>
          <div class="form-group">
              <label>Panggilan</label>
              <input type="text" name="" class="form-control" id="" value="{{ $ayah->panggilan }}">
          </div>
          <div class="form-group">
              <label>NIK</label>
              <input type="text" name="" class="form-control" id="" value="{{ $ayah->nik }}">
          </div>
          <div class="form-group">
              <label>Tanggal Lahir</label>
              <input type="text" name="" class="form-control" id="" value="{{ $ayah->tgl_lahir }}">
          </div>
          <h4><b>Alamat Lengkap</b></h4>
          <hr>
          <div class="form-group">
              <label>Provinsi</label>
              <input type="text" name="" class="form-control" id="" value="{{ $ayah->tgl_lahir }}">
          </div>
          <div class="form-group">
              <label>Kota</label>
              <input type="text" name="" class="form-control" id="" value="{{ $ayah->tgl_lahir }}">
          </div>
          <div class="form-group">
              <label>Alamat Lengkap</label>
              <input type="text" name="" class="form-control" id="" value="{{ $ayah->tgl_lahir }}">
          </div>
          <h4><b>Pendidikan dan Pekerjaan</b></h4>
          <hr>
          <div class="form-group">
              <label>Pendidikan Terakhir</label>
              <input type="text" name="" class="form-control" id="" value="{{ $ayah->pendidikan }}">
          </div>
          <div class="form-group">
              <label>Pekerjaan saat ini</label>
              <input type="text" name="" class="form-control" id="" value="{{ $ayah->pekerjaan }}">
          </div>
          <div class="form-group">
              <label>Penghasilan perbulan</label>
              <input type="text" name="" class="form-control" id="" value="{{ $ayah->penghasilan }}">
          </div>
          <h4><b>Status</b></h4>
          <hr>
          <div class="form-group">
              <label>Hubungan ayah dengan santri</label>
              <input type="text" name="" class="form-control" id="" value="{{ $ayah->hbgn_ayah_santri }}">
          </div>
          <div class="form-group">
              <label>Status Ayah</label>
              <input type="text" name="" class="form-control" id="" value="{{ $ayah->status_ayah }}">
          </div>
        </div>
    </div>

    <!-- Split button -->
</div>


</div>
@stop

