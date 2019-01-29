@extends('admin.template')
@section('content')

<div class="row">

  <div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">Data Ibu</div>
        <div class="panel-body">
          <h3>Data Pribadi</h3>
          <hr>
          <div class="form-group">
              <label>Nama Lengkap</label>
              <h4> {{ $parents->nama_lengkap }} </h4>
          </div>
          <div class="form-group">
              <label>Panggilan</label>
              <h4> {{ $parents->panggilan }} </h4>
          </div>
          <div class="form-group">
              <label>NIK</label>
              <h4> {{ $parents->nik }} </h4>
          </div>
          <div class="form-group">
              <label>Tanggal Lahir</label>
              <h5> {{ $parents->tgl_lahir }} </h5>
          </div>
          <h3>Alamat Lengkap</h3>
          <hr>
          <div class="form-group">
              <label>Provinsi</label>
              <h4> {{ $parents->provinsi }} </h4>
          </div>
          <div class="form-group">
              <label>Kota</label>
              <h4> {{ $parents->kota }} </h4>
          </div>
          <div class="form-group">
              <label>Alamat Lengkap</label>
              <h4> {{ $parents->alamat }} </h4>
          </div>
          <h3>Pendidikan dan Pekerjaan</h3>
          <hr>
          <div class="form-group">
              <label>Pendidikan Terakhir</label>
              <h4> {{ $parents->pendidikan }} </h4>
          </div>
          <div class="form-group">
              <label>Pekerjaan saat ini</label>
              <h4> {{ $parents->pekerjaan }} </h4>
          </div>
          <div class="form-group">
              <label>Penghasilan perbulan</label>
              <h4> {{ $parents->penghasilan }} </h4>
          </div>
          <h3>Status</h3>
          <hr>
          <div class="form-group">
              <label>Hubungan ibu dengan santri</label>
              <h4> {{ $parents->hbgn_ibu_santri }} </h4>
          </div>
          <div class="form-group">
              <label>Status Ibu</label>
              <h4> {{ $parents->status_ibu }} </h4>
          </div>
        </div>
    </div>

    <!-- Split button -->
</div>

<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">Data Ayah</div>
        <div class="panel-body">
          <h3>Data Pribadi</h3>
          <hr>
          <div class="form-group">
              <label>Nama Lengkap</label>
              <h4> {{ $ayah->nama_lengkap }} </h4>
          </div>
          <div class="form-group">
              <label>Panggilan</label>
              <h4> {{ $ayah->panggilan }} </h4>
          </div>
          <div class="form-group">
              <label>NIK</label>
              <h4> {{ $ayah->nik }} </h4>
          </div>
          <div class="form-group">
              <label>Tanggal Lahir</label>
              <h5> {{ $ayah->tgl_lahir }} </h5>
          </div>
          <h3>Alamat Lengkap</h3>
          <hr>
          <div class="form-group">
              <label>Provinsi</label>
              <h4> {{ $ayah->provinsi }} </h4>
          </div>
          <div class="form-group">
              <label>Kota</label>
              <h4> {{ $ayah->kota }} </h4>
          </div>
          <div class="form-group">
              <label>Alamat Lengkap</label>
              <h4> {{ $ayah->alamat }} </h4>
          </div>
          <h3>Pendidikan dan Pekerjaan</h3>
          <hr>
          <div class="form-group">
              <label>Pendidikan Terakhir</label>
              <h4> {{ $ayah->pendidikan }} </h4>
          </div>
          <div class="form-group">
              <label>Pekerjaan saat ini</label>
              <h4> {{ $ayah->pekerjaan }} </h4>
          </div>
          <div class="form-group">
              <label>Penghasilan perbulan</label>
              <h4> {{ $ayah->penghasilan }} </h4>
          </div>
          <h3>Status</h3>
          <hr>
          <div class="form-group">
              <label>Hubungan ayah dengan santri</label>
              <h4> {{ $ayah->hbgn_ayah_santri }} </h4>
          </div>
          <div class="form-group">
              <label>Status Ayah</label>
              <h4> {{ $ayah->status_ayah }} </h4>
          </div>
        </div>
    </div>

    <!-- Split button -->
</div>

<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">Data Wali</div>
        <div class="panel-body">
          <h3>Data Pribadi</h3>
          <hr>
          <div class="form-group">
              <label>Nama Lengkap</label>
              <h4> {{ $wali->nama_lengkap }} </h4>
          </div>
          <div class="form-group">
              <label>Panggilan</label>
              <h4> {{ $wali->panggilan }} </h4>
          </div>
          <div class="form-group">
              <label>NIK</label>
              <h4> {{ $wali->nik }} </h4>
          </div>
          <div class="form-group">
              <label>Tanggal Lahir</label>
              <h5> {{ $wali->tgl_lahir }} </h5>
          </div>
          <h3>Alamat Lengkap</h3>
          <hr>
          <div class="form-group">
              <label>Provinsi</label>
              <h4> {{ $wali->provinsi }} </h4>
          </div>
          <div class="form-group">
              <label>Kota</label>
              <h4> {{ $wali->kota }} </h4>
          </div>
          <div class="form-group">
              <label>Alamat Lengkap</label>
              <h4> {{ $wali->alamat }} </h4>
          </div>
          <h3>Pendidikan dan Pekerjaan</h3>
          <hr>
          <div class="form-group">
              <label>Pendidikan Terakhir</label>
              <h4> {{ $wali->pendidikan }} </h4>
          </div>
          <div class="form-group">
              <label>Pekerjaan saat ini</label>
              <h4> {{ $wali->pekerjaan }} </h4>
          </div>
          <div class="form-group">
              <label>Penghasilan perbulan</label>
              <h4> {{ $wali->penghasilan }} </h4>
          </div>
          <h3>Status</h3>
          <hr>
          <div class="form-group">
              <label>Hubungan wali dengan santri</label>
              <h4> {{ $wali->hbgn_wali_santri }} </h4>
          </div>
          <div class="form-group">
              <label>Status wali</label>
              <h4> {{ $wali->status_wali }} </h4>
          </div>
        </div>
    </div>

    <!-- Split button -->
</div>

</div>
@stop

