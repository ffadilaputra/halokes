@extends('admin.template')

@section('content')
<style>
#myOnlineCamera video{width:320px;height:240px;margin:15px;float:left;}
#myOnlineCamera canvas{width:320px;height:240px;margin:15px;float:left;}
#myOnlineCamera button{clear:both;margin:30px;}
</style>
<div class="row">
  <div class="col-md-8">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4>Data Pribadi santri</h4>
      </div>
      <div class="panel-body">
        <table class="table table-bordered table-hover">
          <tbody>
            <tr>
              <td colspan="2" style="height:100px">
                <center>
                  @if($archive->foto_santri)
                  <img id="santri" src="{{ base_url('assets/uploads/').$archive->foto_santri }}" alt="your image" style="width:150px; height:200px; background-color:#eeeeee;" />
                  @else
                  <span class="label label-danger">File belum di unggah</span>
                  @endif
                </center>
              </td>
            </tr>
            <tr>
              <th>Nama Lengkap</th>
              <td>{{ $santri->nama_lengkap }}</td>
            </tr>
            <tr>
              <th>Panggilan</th>
              <td>{{ $santri->panggilan }}</td>
            </tr>
            <tr>
              <th>Jenis Kelamin</th>
              <td>{{ $santri->jenis_kelamin }}</td>
            </tr>
            <tr>
              <th>NIK</th>
              <td>{{ $santri->nik }}</td>
            </tr>
            <tr>
              <th>Tempat,Tanggal Lahir</th>
              <td>{{ $santri->tempat_lahir }}, {{ tgl_indo($santri->tgl_lahir) }}</td>
            </tr>
          </tbody>
        </table>

        <h4><b>Alamat Lengkap</b></h4>
        <hr>
        <table class="table table-bordered table-hover">
          <tbody>
          </tbody>
        </table>

        <h4><b>Data Keluarga</b></h4>
        <hr>
        <table class="table table-bordered table-hover">
          <tbody>
            <tr>
              <th>Nomor KK</th>
              <td>{{ $santri->no_kk }}</td>
            </tr>
            <tr>
              <th>Nomor KIP</th>
              <td>{{ $santri->no_kip }}</td>
            </tr>
            <tr>
              <th>Nomor BPJS</th>
              <td>{{ $santri->no_bpjs }}</td>
            </tr>
            <tr>
              <th>Status Keluarga</th>
              <td>{{ $santri->status_keluarga }}</td>
            </tr>
            <tr>
              <th>Nomor Jamkes</th>
              <td>{{ $santri->no_jamkes }}</td>
            </tr>
            <tr>
              <th>Status Saudara</th>
              <td><label for="">Anak ke </label> {{ $santri->anak_ke }} <label>dari</label> {{ $santri->jml_saudara }} <label>bersaudara</label></td>
            </tr>
          </tbody>
        </table>

        <h4><b>Hobbi dan Cita-cita</b></h4>
        <hr>
        <table class="table table-bordered table-hover">
          <tbody>
            <tr>
              <th>Hobbi</th>
              <td>{{ $santri->hobi }}</td>
            </tr>
            <tr>
              <th>Cita - Cita</th>
              <td>{{ $santri->cita_cita }}</td>
            </tr>
            <tr>
              <th>Berkebutuhan Khusus</th>
              <td>{{ $santri->kebutuhan_khusus }}</td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>

    <!-- Split button -->
  </div>
  <div class="col-md-4">
    @if($archive->foto_santri)
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="row">
          <p>Ambil Gambar</p>
          <div id="camera">Capture</div>

          <div id="webcam">
            <input type=button value="Capture" class="btn btn-primary" onClick="preview()">
          </div>
          <div id="simpan" style="display:none">
            <form action="file_uploader.php" method="post" enctype="multipart/form-data">
              <p id="fileToUpload">
            <input type=button value="Remove" class="btn btn-warning" onClick="batal()">
            <input type="submit" value="Save"  class="btn btn-success" onClick="simpan()" style="font-weight:bold;">
            </p>
            </form>
          </div>

          <div id="hasil"></div>

        </div>
      </div>
      @endif

      <p style="padding-bottom:5px">
        <a class="btn btn-success" href="{{ base_url('admin/parents/santri/'.$santri->id_santri) }}">Ubah data santri</a>
      </p>
      <p style="padding-bottom:5px">
        <a class="btn btn-sm btn-info" href="{{ base_url('admin/berkas/parents/'.$santri->id_santri) }}">Identitas Wali</a>
      </p>
      <p style="padding-bottom:5px">
        <a class="btn btn-sm btn-info" href="{{ base_url('admin/berkas/education/'.$santri->id_santri) }} ">Asal Sekolah</a>
      </p>
      <p style="padding-bottom:5px">
        <a class="btn btn-sm btn-info" href="{{ base_url('admin/berkas/archive/'.$santri->id_santri) }}">Berkas</a>
      </p>
      <p style="padding-bottom:5px">
        <a class="btn btn-sm btn-success" href="{{ base_url('admin/santri/verify/').$santri->id_santri }}">Verifikasi</a>
      </p>
      <a class="btn btn-sm btn-danger" href="{{ base_url('admin/santri/destroy/'.$santri->id_santri) }}">Hapus</a>
    </div>
  </div>
  @endsection
  @section('javascript')
  <script src="{{ base_url('assets/sb-admin/js/webcam.min.js') }}"></script>
  <!-- Configure a few settings and attach camera -->
  <script language="Javascript">

  var id = <?= json_encode($archive->id_santri); ?>
  // konfigursi webcam
  Webcam.set({
    width: 320,
    height: 240,
    image_format: 'jpg',
    jpeg_quality: 100
  });
  Webcam.attach( '#camera' );

  function preview() {
    // untuk preview gambar sebelum di upload
    Webcam.freeze();
    // ganti display webcam menjadi none dan simpan menjadi terlihat
    document.getElementById('webcam').style.display = 'none';
    document.getElementById('simpan').style.display = '';
    Webcam.snap( function(data_uri) {
      document.getElementById('fileToUpload').innerHTML = '<input type="file" name="fileToUpload" value="'+data_uri+'" >';
    });
  }

  function batal() {
    // batal preview
    Webcam.unfreeze();

    // ganti display webcam dan simpan seperti semula
    document.getElementById('webcam').style.display = '';
    document.getElementById('simpan').style.display = 'none';
  }

  function simpan() {
    // ambil foto
    Webcam.snap( function(data_uri) {

      // upload foto
      Webcam.upload( data_uri, 'admin/parents/updateProfile/' + id, function(code, text) {} );

      // tampilkan hasil gambar yang telah di ambil
      document.getElementById('hasil').innerHTML =
      '<p>Hasil : </p>' +
      '<img src="'+data_uri+'"/>';

      Webcam.unfreeze();

      document.getElementById('webcam').style.display = '';
      document.getElementById('simpan').style.display = 'none';
    } );
    console.log('tes')
  }
  </script>
  @stop
