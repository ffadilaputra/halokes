@extends('admin.template')
@section('content')

<div class="row">

<!-- Ayah -->
  <div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Data Santri</h4>
        </div>
        <div class="panel-body">
          <h4><b>Data Pribadi</b></h4>
          <hr>
          <?= form_open('admin/parents/updateSantri/'.$santri->id_santri) ?>
          <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" name="nama_lengkap" class="form-control" value="{{ $santri->nama_lengkap }}">
          </div>
          <div class="form-group">
              <label>Panggilan</label>
              <input type="text" name="panggilan" class="form-control" id="" value="{{ $santri->panggilan }}">
          </div>
          <div class="form-group">
              <label>NISN</label>
              <input type="text" name="nisn" class="form-control" id="" value="{{ $santri->nisn }}">
          </div>
          <div class="form-group">
              <label>Tanggal Lahir</label>
              <div class="input-group date">
                  <input name="tgl_lahir" type="text" class="form-control" value="{{ $santri->tgl_lahir }}">
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-th"></i>
                  </span>
              </div>
            </div>
          <h4><b>Alamat Lengkap</b></h4>
          <hr>
          <div class="form-group">
              <label>Kota</label>
              <input type="text" name="kota" class="form-control" id="" value="{{ $santri->kota }} ">
          </div>
          <h4><b>Pendidikan dan Pekerjaan</b></h4>
          <hr>
          <div class="form-group">
              <label>Pendidikan Terakhir</label>
               <select class="form-control" name="tingkat_pendidikan" id="" value="">
                  <option @if($santri->tingkat_pendidikan == 'ma') selected @endif value="ma">Madarasah Aliyah</option>
                  <option @if($santri->tingkat_pendidikan == 'mts') selected @endif value="mts">Madarasah Tsanawiyah</option>
                  <option @if($santri->tingkat_pendidikan == 'md') selected @endif value="md">Madarasah Diniyah</option>
              </select>
          </div>
          <div class="form-group">
              <label>Jenis Kelamin</label>
              <select class="form-control" name="jenis_kelamin">
                  <option @if($santri->jenis_kelamin == 'laki-laki') selected @endif value="laki-laki">Laki-Laki</option>
                  <option @if($santri->jenis_kelamin == 'perempuan') selected @endif value="perempuan">Perempuan</option>
              </select>
          </div>
          <div class="form-group">
              <label>Jenis Siswa</label>
              <select class="form-control" name="jenis_siswa">
                  <option @if($santri->jenis_siswa == 'lama') selected @endif value="lama">Lama</option>
                  <option @if($santri->jenis_siswa == 'baru') selected @endif value="baru">Baru</option>
              </select>
          </div>
          <div class="form-group">
              <label>Berkebutuhan Khusus</label>
              <select class="form-control" name="kebutuhan_khusus">
                  <option @if($santri->kebutuhan_khusus == 'ya') selected @endif value="ya">Ya</option>
                  <option @if($santri->kebutuhan_khusus == 'tidak') selected @endif value="tidak">Tidak</option>
              </select>
          </div>
          <h4><b>Status</b></h4>
          <hr>
          <div class="form-group">
              <label>Cita - Cita</label>
              <select class="form-control" name="cita_cita" id="citacita" value="" required="">
                  <option @if($santri->cita_cita == 'pns' ) selected @endif value="pns">PNS</option>
                  <option @if($santri->cita_cita == 'dokter' ) selected @endif value="dokter">dokter</option>
                  <option @if($santri->cita_cita == 'pekerjaserabutan' ) selected @endif value="pekerjaserabutan">Pekerja Serabutan</option>
                  <option @if($santri->cita_cita == 'tnipolri' ) selected @endif value="tnipolri">TNI/Polri</option>
                  <option @if($santri->cita_cita == 'politikus' ) selected @endif value="politikus">Politikus</option>
                  <option @if($santri->cita_cita == 'guru' ) selected @endif value="guru">guru/dosen</option>
                  <option @if($santri->cita_cita == 'wiraswasta' ) selected @endif value="wiraswasta">wiraswasta</option>
                  <option @if($santri->cita_cita == 'lainnya' ) selected @endif value="lainnya">lainnya</option>
               </select>
          </div>
          <div class="form-group">
              <label>Status dalam keluarga</label>
              <select class="form-control" name="status_keluarga">
                  <option @if($santri->status_keluarga == 'kandung' ) selected @endif  value="kandung">Kandung</option>
                  <option @if($santri->status_keluarga == 'angkat' ) selected @endif value="angkat">Angkat</option>
                  <option @if($santri->status_keluarga == 'tiri' ) selected @endif value="tiri">Tiri</option>
              </select>
          </div>
          <div class="form-group">
              <label>Hobi</label>
              <select name="hobi" class="form-control" id="hobi">
                  <option @if($santri->hobi == 'olahraga' ) selected @endif value="olahraga">Olahraga</option>
                  <option @if($santri->hobi == 'rekreasi' ) selected @endif value="rekreasi">Rekreasi</option>
                  <option @if($santri->hobi == 'menulis' ) selected @endif value="menulis">Menulis</option>
                  <option @if($santri->hobi == 'membaca' ) selected @endif value="membaca">Membaca</option>
                  <option @if($santri->hobi == 'kesenian' ) selected @endif value="kesenian">Kesenian</option>
                  <option @if($santri->hobi == 'Lainnya' ) selected @endif value="Lainnya">lainnya</option>
              </select>
          </div>
          <div class="form-group">
            <label>Berkebutuhan khusus</label>
            <select name="kebutuhan_khusus" class="form-control">
                <option @if($santri->kebutuhan_khusus == 'tidak' ) selected @endif value="tidak">Tidak </option>
                <option @if($santri->kebutuhan_khusus == 'tunaRungu' ) selected @endif value="tunaRungu">Tuna Rungu</option>
                <option @if($santri->kebutuhan_khusus == 'tunaGrahita' ) selected @endif value="tunaGrahita">Tuna Grahita</option>
                <option @if($santri->kebutuhan_khusus == 'tunaNetra' ) selected @endif value="tunaNetra">Tuna Netra</option>
                <option @if($santri->kebutuhan_khusus == 'tunaLaras' ) selected @endif value="tunaLaras">Tuna Laras</option>
                <option @if($santri->kebutuhan_khusus == 'tunaDaksa' ) selected @endif value="tunaDaksa">Tuna Daksa</option>
                <option @if($santri->kebutuhan_khusus == 'sulitBelajar' ) selected @endif value="sulitBelajar">sulitBelajar</option>
                <option @if($santri->kebutuhan_khusus == 'gangguanKomunikasi' ) selected @endif value="gangguanKomunikasi">Gangguan Komunikasi</option>
                <option @if($santri->kebutuhan_khusus == 'lambanBelajar' ) selected @endif value="lambanBelajar">Lamban Belajar</option>
                <option @if($santri->kebutuhan_khusus == 'bakatLuarBiasa' ) selected @endif value="bakatLuarBiasa">Bakat Luar Biasa</option>
            </select>
        </div>
          <div class="form-group">
              <label>Jumlah saudara</label>
              <input type="text" name="jml_saudara" class="form-control" value="{{ $santri->jml_saudara }}">
          </div>
          <div class="form-group">
              <label>Anak ke-</label>
              <input type="text" name="anak_ke" class="form-control" value="{{ $santri->anak_ke }}">
          </div>
          <div class="form-group">
              <h4><b>Nomor data keluarga</b></h4>
              <hr>
          </div>
          <div class="form-group">
              <label>NIK</label>
              <input type="text" name="nik" class="form-control" id="" value="{{ $santri->nik }}">
          </div>
          <div class="form-group">
              <label>Nomor KK</label>
              <input type="text" name="no_kk" class="form-control" id="" value="{{ $santri->no_kk }}">
          </div>
          <div class="form-group">
              <label>Nomor BPJS</label>
              <input type="text" name="no_bpjs" class="form-control" id="" value="{{ $santri->no_bpjs }}">
          </div>
          <div class="form-group">
              <label>Nomor Jamkes</label>
              <input type="text" name="no_jamkes" class="form-control" id="" value="{{ $santri->no_jamkes }}">
          </div>
          <div class="form-group">
              <label>Nomor KIP</label>
              <input type="text" name="no_kip" class="form-control" id="" value="{{ $santri->no_jamkes }}">
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
