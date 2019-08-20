@extends('admin.template')
@section('content')

<div class="row">

<!-- Wali -->
  <div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Data Wali</h4>
        </div>
        <div class="panel-body">
          <h4><b>Data Pribadi</b></h4>
          <hr>
          <?= form_open('admin/parents/updateWali/'.$parents->id_santri) ?>
          <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" name="nama_lengkap" class="form-control" value="{{ $parents->nama_lengkap }}">
          </div>
          <div class="form-group">
              <label>Panggilan</label>
              <input type="text" name="panggilan" class="form-control" id="" value="{{ $parents->panggilan }}">
          </div>
          <div class="form-group">
              <label>NIK</label>
              <input type="text" name="nik" class="form-control" id="" value="{{ $parents->nik }}">
          </div>
          <div class="form-group">
              <label>Tanggal Lahir</label>
              <div class="input-group date">
                  <input name="tgl_lahir" type="text" class="form-control" value="{{ $parents->tgl_lahir }}">
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-th"></i>
                  </span>
              </div>
            </div>
            <div class="form-group">
              <label>Telepon/Whatsapp</label>
              <input type="text" name="telepon" class="form-control" id="" value="{{ $parents->telepon }}">
          </div>
          <h4><b>Alamat Lengkap</b></h4>
          <hr>
          <div class="form-group">
              <label>Provinsi</label>
              <input type="text" name="provinsi" class="form-control" id="" value=" {{ $parents->provinsi }} ">
          </div>
          <div class="form-group">
              <label>Kota</label>
              <input type="text" name="kota" class="form-control" id="" value="{{ $parents->kota }} ">
          </div>
          <div class="form-group">
              <label>Alamat Lengkap</label>
              <input type="text" name="alamat" class="form-control" id="" value=" {{ $parents->alamat }} ">
          </div>
          <h4><b>Pendidikan dan Pekerjaan</b></h4>
          <hr>
          <div class="form-group">
              <label>Pendidikan Terakhir</label>
               <select class="form-control" name="pendidikan" id="" value="">
                  <option @if($parents->pendidikan == 'SD/MI') selected @endif value="SD/MI">SD/MI</option>
                  <option @if($parents->pendidikan == 'SMP/MTs/SLTP') selected @endif value="SMP/MTs/SLTP">SMP/MTs/SLTP</option>
                  <option @if($parents->pendidikan == 'SMA/MA/SLTA/SMK') selected @endif value="SMA/MA/SLTA/SMK">SMA/MA/SLTA/SMK</option>
                  <option @if($parents->pendidikan == 'D1') selected @endif value="D1">D1</option>
                  <option @if($parents->pendidikan == 'D3') selected @endif value="D3">D3</option>
                  <option @if($parents->pendidikan == 'D4') selected @endif value="D4">D4</option>
                  <option @if($parents->pendidikan == 'S1') selected @endif value="S1">S1</option>
                  <option @if($parents->pendidikan == 'S2') selected @endif value="S2">S2</option>
                  <option @if($parents->pendidikan == 'S3') selected @endif value="S3">S3</option>
              </select>
          </div>
          <div class="form-group">
                <label>Pekerjaan saat ini</label>
                <select class="form-control" name="pekerjaan" onChange="showField(this.options[this.selectedIndex].value)">
                    <option selected>-- Pilih Pekerjaan --</option>
                    <option @if($parents->pekerjaan == 'Swasta') selected @endif value="Swasta">Swasta</option>
                    <option @if($parents->pekerjaan == 'PNS') selected @endif value="PNS">PNS</option>
                    <option @if($parents->pekerjaan == 'Wiraswasta') selected @endif value="Wiraswasta">Wiraswasta</option>
                    <option @if($parents->pekerjaan == 'Petani') selected @endif value="Petani">Petani</option>
                    <option @if($parents->pekerjaan == 'Buruh') selected @endif value="Buruh">Buruh</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
                <div id="other"></div>
            </div>
          <div class="form-group">
              <label>Penghasilan perbulan</label>
              <select class="form-control" name="penghasilan" id="">
                  <option @if($parents->penghasilan == '<1jt') selected @endif value="<1jt">&lt; Rp 1000.000,-</option>
                  <option @if($parents->penghasilan == '1jt-2jt') selected @endif value="1jt-2jt">Rp 1.000.000,- - Rp 2.0000.000,-</option>
                  <option @if($parents->penghasilan == '2jt-3jt') selected @endif value="2jt-3jt">Rp 2.000.000,- - Rp 3.0000.000,-</option>
                  <option @if($parents->penghasilan == '4jt-5jt') selected @endif value="4jt-5jt">Rp 4.000.000,- - Rp 5.0000.000,-</option>
                  <option @if($parents->penghasilan == '>5jt') selected @endif value=">5jt"> &gt; Rp 5.0000.000,-</option>
                  <option @if($parents->penghasilan == '>10jt') selected @endif value=">10jt"> &gt; Rp 10.0000.000,-</option>
              </select>
          </div>
          <h4><b>Status</b></h4>
          <hr>
          <div class="form-group">
              <label>Hubungan Wali dengan santri</label>
              <select class="form-control" name="hbgn_wali_santri">
                  <option @if($parents->hbgn_wali_santri == 'kandung' ) selected @endif value="kandung">wali Kandung</option>
                  <option @if($parents->hbgn_wali_santri == 'tiri' ) selected @endif value="tiri">wali Tiri</option>
                  <option @if($parents->hbgn_wali_santri == 'angkat' ) selected @endif value="angkat">wali Angkat</option>
              </select>
          </div>
          <div class="form-group">
              <label>Status wali</label>
              <select class="form-control" name="status_wali" id="">
                  <option @if($parents->status_wali == 'hidup' ) selected @endif  value="hidup">Hidup</option>
                  <option @if($parents->status_wali == 'meninggal' ) selected @endif value="meninggal">Meninggal</option>
                  <option @if($parents->status_wali == 'hilang' ) selected @endif value="hilang">Hilang</option>
              </select>
          </div>
          <div class="form-group">
              <input type="submit" class="btn btn-success">
          </div>
        </div>
        <?= form_close() ?>
    </div>
    <!-- Split button -->
</div>
</div>
@stop
