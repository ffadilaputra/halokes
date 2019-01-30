@extends('admin.template')
@section('content')

<div class="row">

<!-- ibu -->
  <div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Data Ibu</h4>
        </div>
        <div class="panel-body">
          <h4><b>Data Pribadi</b></h4>
          <hr>

          
          <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" name="" id="" class="form-control" value="{{ $parents->nama_lengkap }}">
              
          </div>
          <div class="form-group">
              <label>Panggilan</label>
              <input type="text" name="" class="form-control" id="" value="{{ $parents->panggilan }}">
              
          </div>
          <div class="form-group">
              <label>NIK</label>
              <input type="text" name="" class="form-control" id="" value="{{ $parents->nik }}">
          </div>
          <div class="form-group">
              <label>Tanggal Lahir</label>
              <input type="text" name="" class="form-control" id="" value="{{ $parents->tgl_lahir }}">
          </div>
          <h4><b>Alamat Lengkap</b></h4>
          <hr>
          <div class="form-group">
              <label>Provinsi</label>
              <input type="text" name="" class="form-control" id="" value=" {{ $parents->provinsi }} ">
          </div>
          <div class="form-group">
              <label>Kota</label>
              <input type="text" name="" class="form-control" id="" value="{{ $parents->kota }} ">
          </div>
          <div class="form-group">
              <label>Alamat Lengkap</label>
              <input type="text" name="" class="form-control" id="" value=" {{ $parents->alamat }} ">
          </div>
          <h4><b>Pendidikan dan Pekerjaan</b></h4>
          <hr>
          <div class="form-group">
              <label>Pendidikan Terakhir</label>
              <input type="text" name="" class="form-control" id="" value="{{ $parents->pendidikan }}">
          </div>
          <div class="form-group">
              <label>Pekerjaan saat ini</label>
              <input type="text" name="" class="form-control" id="" value="{{ $parents->pekerjaan }}">
          </div>
          <div class="form-group">
              <label>Penghasilan perbulan</label>
              <input type="text" name="" class="form-control" id="" value="{{ $parents->penghasilan }}">
          </div>
          <h4><b>Status</b></h4>
          <hr>
          <div class="form-group">
              <label>Hubungan ibu dengan santri</label>
              <input type="text" name="" class="form-control" id="" value="{{ $parents->hbgn_ibu_santri }}">
          </div>
          <div class="form-group">
              <label>Status Ibu</label>
              <input type="text" name="" class="form-control" id="" value="{{ $parents->status_ibu }}">
          </div>
        </div>
    </div>

    <!-- Split button -->
</div>

</div>
@stop

