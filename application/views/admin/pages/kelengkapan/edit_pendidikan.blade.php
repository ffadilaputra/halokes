@extends('admin.template')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
      <!-- Main Content -->
<div class="row">
<!-- ibu -->
<div class="col-md-8">
<div class="panel panel-default">
  <div class="panel-heading">
      <h4>Riwayat pendidikan santri</h4>
  </div>
  <div class="panel-body">
    <h4><b>Data Sekolah</b></h4>
    <hr>
   <?= form_open('admin/pendidikan/pendidikanUpdate/'.$edit->id_siswa) ?>
    <div class="form-group">
        <label>Nama sekolah santri</label>
        <input type="text" name="nama_sekolah_siswa" class="form-control" value="{{ $edit->nama_sekolah_siswa }}">
    </div>
    <div class="form-group">
        <label for="jenisSekolah">Jenis Sekolah</label>
        <select class="form-control" name="jenis_sekolah_siswa">
          <option @if($edit->jenis_sekolah_siswa == 'sd') selected @endif value="sd">SD</option>
          <option @if($edit->jenis_sekolah_siswa == 'mi') selected @endif value="mi">MI</option>
          <option @if($edit->jenis_sekolah_siswa == 'smp') selected @endif value="smp">SMP</option>
          <option @if($edit->jenis_sekolah_siswa == 'mts') selected @endif value="mts">MTS</option>
          <option @if($edit->jenis_sekolah_siswa == 'sma/smk') selected @endif value="sma/smk">SMA/K</option>
          <option @if($edit->jenis_sekolah_siswa == 'ma') selected @endif value="ma">MA</option>
          <option @if($edit->jenis_sekolah_siswa == 'paketA') selected @endif value="paketA">paket A</option>
          <option @if($edit->jenis_sekolah_siswa == 'paketB') selected @endif value="paketB">paket B</option>
          <option @if($edit->jenis_sekolah_siswa == 'paketC') selected @endif value="paketC">paket C</option>
        </select>
     </div>
     <div class="form-group">
        <label for="statusSekolah">Status Sekolah</label>
        <select class="form-control" name="status_sekolah_siswa" id="statusSekolah" value="">
          <option @if($edit->status_sekolah_siswa == 'negeri') selected @endif value="negeri">Negeri</option>
          <option @if($edit->status_sekolah_siswa == 'swasta') selected @endif value="swasta"> Swasta</option>
        </select>
     </div>
     <div class="form-group">
        <label for="alamat">Alamat Sekolah</label>
        <textarea name="alamat_sekolah_siswa" class="form-control" rows="4">{{ $edit->alamat_sekolah_siswa }}</textarea>
      </div>
     <div class="form-group">
        <label for="kabkota">Kota/Kabupaten</label>
        <input name="kota" type="text" class="form-control" value="{{ $edit->alamat_sekolah_siswa }}">
      </div>
      <div class="form-group">
          <label for="prov">Provinsi</label>
          <input name="provinsi_siswa" type="text" class="form-control" id="prov" value="{{ $edit->provinsi_siswa }}">
      </div>
      <div class="form-group">
          <label for="nss">NSS/NSM</label>
          <input name="nss" type="number" class="form-control" id="nss" value="{{ $edit->nss }}">
      </div>
      <div class="form-group">
          <label for="npsn">NPSN</label>
          <input name="npsn" type="number" class="form-control" id="npsn" value="{{ $edit->npsn }}">
      </div>
      <div class="form-group">
          <label for="ijazah">No Seri Ijazah</label>
          <input name="no_seri_ijazah" type="text" class="form-control" id="noijazah" value="{{ $edit->no_seri_ijazah }}">
      </div>
      <div class="form-group">
          <label for="skhun">No Seri SKHUN</label>
          <input name="no_seri_skhun" type="text" class="form-control" id="skhun" value="{{ $edit->no_seri_skhun }}">
      </div>
      <div class="form-group">
          <label for="noUn">No Peserta Ujian UN</label>
          <input name="no_peserta_ujian" type="text" class="form-control" id="noUn" value="{{ $edit->no_peserta_ujian }}">
      </div>
      <input class="btn btn-info" type="submit" value="Ubah riwayat pendidikan">
  </form>
  </div>
</div>
<!-- Split button -->
</div>
</div>
    </div>
</div>
@stop
