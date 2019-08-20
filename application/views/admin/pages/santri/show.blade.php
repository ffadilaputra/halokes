@extends('admin.template')

@section('content')

<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">
      Data Santri
    </h1>
  </div>
</div>

<!-- identitas siswa -->
<div class="panel panel-default">
  <div class="panel-heading">
    <div class="row">
      <div class="col-lg-12">
        <h2>Identitas Siswa</h2>
        <div class="form-group">
          <a style="float:right" class="btn btn-success" href="{{ base_url('admin/parents/santri/'.$santri->id_santri) }}">Ubah Santri</a>
          <br>
        </div>
        <hr>
        <div class="col-lg-6">
          <table class="table table-bordered table-hover">
            <tbody>
              <tr>
                <td class="col-sm-6 col-xs-6"><b>Tingkat Pendidikan</b></td>
                <td class="col-sm-6 col-xs-6">
                  @if($santri->tingkat_pendidikan == 'mt')
                  <label class="text-success">Madarasah Tsanawiyah</label>
                  @elseif($santri->tingkat_pendidikan == 'ma')
                  <label class="text-success">Madarasah Aliyah</label>
                  @elseif($santri->tingkat_pendidikan == 'md')
                  <label class="text-success">Madarasah Diniyah</label>
                  @endif
                </td>
              </tr>
              <tr>
                <td class="col-sm-6 col-xs-6"><b>Jenis Siswa</b></td>
                <td class="col-sm-6 col-xs-6">{{ $santri->jenis_siswa }}</td>
              </tr>
              <tr>
                <td class="col-sm-6 col-xs-6"><b>No Induk</b></td>
                <td class="col-sm-6 col-xs-6">{{ $santri->no_induk }}</td>
              </tr>
              <tr>
                <td class="col-sm-6 col-xs-6"><b>NISN</b></td>
                <td class="col-sm-6 col-xs-6">{{ $santri->nisn }}</td>
              </tr>
              <tr>
                <td class="col-sm-6 col-xs-6"><b>Nama Lengkap</b></td>
                <td class="col-sm-6 col-xs-6">{{ $santri->nama_lengkap }}</td>
              </tr>
              <tr>
                <td class="col-sm-6 col-xs-6"><b>Nama Panggilan</b></td>
                <td class="col-sm-6 col-xs-6">{{ $santri->panggilan }}</td>
              </tr>
              <tr>
                <td class="col-sm-6 col-xs-6"><b>NIK</b></td>
                <td class="col-sm-6 col-xs-6">{{ $santri->nik }}</td>
              </tr>
              <tr>
                <td class="col-sm-6 col-xs-6"><b>No KK</b></td>
                <td class="col-sm-6 col-xs-6">{{ $santri->no_kk }}</td>
              </tr>
              <tr>
                <td class="col-sm-6 col-xs-6"><b>Tempat Lahir</b></td>
                <td class="col-sm-6 col-xs-6">{{ $santri->tempat_lahir }}</td>
              </tr>
              <tr>
                <td class="col-sm-6 col-xs-6"><b>Tanggal Lahir</b></td>
                <td class="col-sm-6 col-xs-6">{{ tgl_indo($santri->tgl_lahir) }}</td>
              </tr>
            </tbody>
          </table>

        </div>
        <div class="col-lg-6">
          <table class="table table-bordered table-hover">

            <tbody>
              <tr>
                <td class="col-sm-6 col-xs-6"><b>Jenis Kelamin</b></td>
                <td class="col-sm-6 col-xs-6">{{ $santri->jenis_kelamin }}</td>
              </tr>
              <tr>
                <td class="col-sm-6 col-xs-6"><b>Status dalam Keluarga</b></td>
                <td class="col-sm-6 col-xs-6">{{ $santri->status_keluarga }}</td>
              </tr>
              <tr>
                <td class="col-sm-6 col-xs-6"><b>Anak ke</b></td>
                <td class="col-sm-6 col-xs-6">{{ $santri->anak_ke }}</td>
              </tr>
              <tr>
                <td class="col-sm-6 col-xs-6"><b>Jumlah Saudara</b></td>
                <td class="col-sm-6 col-xs-6">{{ $santri->jml_saudara }}</td>
              </tr>
              <tr>
                <td class="col-sm-6 col-xs-6"><b>No KIP</b></td>
                <td class="col-sm-6 col-xs-6">{{ $santri->no_kip }}</td>
              </tr>
              <tr>
                <td class="col-sm-6 col-xs-6"><b>No BPJS</b></td>
                <td class="col-sm-6 col-xs-6">{{ $santri->no_bpjs }}</td>
              </tr>
              <tr>
                <td class="col-sm-6 col-xs-6"><b>No Jamkes</b></td>
                <td class="col-sm-6 col-xs-6">{{ $santri->no_jamkes }}</td>
              </tr>
              <tr>
                <td class="col-sm-6 col-xs-6"><b>Hobi</b></td>
                <td class="col-sm-6 col-xs-6">{{ $santri->hobi }}</td>
              </tr>
              <tr>
                <td class="col-sm-6 col-xs-6"><b>Cita-cita</b></td>
                <td class="col-sm-6 col-xs-6">{{ $santri->cita_cita }}</td>
              </tr>
              <tr>
                <td class="col-sm-6 col-xs-6"><b>Berkebutuhan Khusus</b></td>
                <td class="col-sm-6 col-xs-6">{{ $santri->kebutuhan_khusus }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div> <!-- identitas siswa end -->

<!-- virtual akun siswa -->
<div class="panel panel-default">
  <div class="panel-heading">
    <div class="row">
      <div class="col-lg-12">
        <h2>Virtual Akun </h2>
        <div class="form-group">
          <a style="float:right" class="btn btn-success" href="{{ base_url('admin/parents/virtualAkun/'.$santri->id_santri) }}">Ubah Virtual Akun</a>
          <br>
        </div>
        <hr>
        <div class="col-lg-8">
          <table class="table table-bordered table-hover">
            <tbody>
              <tr>
                <td class="col-sm-6 col-xs-6"><b>Nomor Pendaftaran</b></td>
                <td class="col-sm-6 col-xs-6">{{ $santri->virtualAkun->no_pendaftaran }}</td>
              </tr>
              <tr>
                <td class="col-sm-6 col-xs-6"><b>Nomor Induk</b></td>
                <td class="col-sm-6 col-xs-6">{{ $santri->virtualAkun->nomor_induk }}</td>
              </tr>
              <tr>
                <td class="col-sm-6 col-xs-6"><b>Nomor Virtual Akun</b></td>
                <td class="col-sm-6 col-xs-6">{{ $santri->virtualAkun->no_virtual_account }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div> <!-- virtual akun siswa end -->

<!-- Catatan keuangan siswa -->
<div class="panel panel-default">
  <div class="panel-heading">
    <div class="row">
      <div class="col-lg-12">
        <h2>Catatan Keuangan Siswa</h2>
        <hr>
        <div class="col-lg-6">
          <div class="form-group">
            <label>Tahap / Angsuran</label>
          </div>
          <table border="0" class="table table-hover">
            <?php $no = 1; ?>
            @foreach($angsuran as $value)
            <tr>
              <td>Tahap {{ $no++ }}</td>
              <td><label class="btn btn-info" disabled>Lunas</label></td>
            </tr>
            @endforeach
          </table>
          <div class="form-group">
            <table border="0" class="table table-hover">
              <tr>
                <td>Tanggungan Yang belum Lunas</td>
                <td>
                  <?php
                  $lapAngsuran = $laporanangsuran[0]['biaya'] / 3;
                  $sisaBagi3 = $lapAngsuran * count($angsuran);
                  $hasilAngsuran = $laporanangsuran[0]['biaya'] - $sisaBagi3;
                  ?>
                  <label class="btn btn-warning" disabled>{{ convertRupiah($hasilAngsuran) }}</label></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label>Syahriyah</label>
            </div>
            <div class="row">
              @foreach($spp as $value)
              <div class="col-md-4">
                <p class="btn btn-warning" disabled>{{ $value->bulan }} {{ $value->tahun_akademik }}</p>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      @if($admin->id_level == 10 || $admin->id_level == 17)
      <div class="row">
        <div class="col-md-6">
          <a href="{{ base_url('admin/santri/pembayaran/'.$santri->id_santri) }}" class="btn btn-primary" style="float:right">Bayar Sekarang</a>
        </div>
      </div>
      @endif
    </div>
  </div> <!-- Catatan keuangan siswa end -->

  <!-- pendidikan sebelumnya -->
  <div class="panel panel-default">
    <div class="panel-heading">
      <div class="row">
        <div class="col-lg-12">
          <h2>Pendidikan Sebelumnya</h2>
          <hr>
          <div class="form-group">
            <a style="float:right" class="btn btn-success" href="{{ base_url('admin/pendidikan/pendidikan_edit/'.$santri->id_santri) }}">Ubah data Pendidikan</a>
            <br>
          </div>
          <div class="col-lg-6">
            <table class="table table-bordered table-hover">
              <tbody>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Nama Sekolah</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->detailPendidikan->nama_sekolah_siswa }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Jenis Sekolah</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->detailPendidikan->jenis_sekolah_siswa }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Status Sekolah</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->detailPendidikan->status_sekolah_siswa }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Alamat Sekolah</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->detailPendidikan->alamat_sekolah_siswa }}</td>
                </tr>
                <tr>
                  <!-- van iki kab/kota e alamatnya sekolah -->
                  <td class="col-sm-6 col-xs-6"><b>Kota/Kabupaten</b></td>
                  <td class="col-sm-6 col-xs-6"> - </td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Provinsi</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->detailPendidikan->provinsi_siswa }}</td>
                </tr>
              </tbody>
            </table>

          </div>
          <div class="col-lg-6">
            <table class="table table-bordered table-hover">

              <tbody>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>NSS/NSM</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->detailPendidikan->nss }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>NPSN</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->detailPendidikan->npsn }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>No Seri Ijazah</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->detailPendidikan->no_seri_ijazah }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>No Seri SKHUN</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->detailPendidikan->no_seri_skhun }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>No Peserta Ujian UN</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->detailPendidikan->no_peserta_ujian }}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- pendidikan sebelumnya end -->

  <!-- identitas orang tua dan wali -->
  <div class="panel panel-default">
    <div class="panel-heading">
      <div class="row">
        <div class="col-lg-12">
          <h2>Identitas Orang Tua</h2>
          <hr>
          <div class="col-lg-6">
            <div>
              <h3>Identitas Ayah</h3>
              <div class="form-group">
                <a style="float:right" class="btn btn-success" href="{{ base_url('admin/parents/ayah/'.$santri->id_santri) }}">Ubah data Ayah</a>
                <br>
              </div>
              <hr>
            </div>
            <table class="table table-bordered table-hover">
              <tbody>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Nama Lengkap</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->ayahSantri->nama_lengkap }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Nama Panggilan</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->ayahSantri->panggilan }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>NIK</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->ayahSantri->nik }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Tempat Lahir</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->ayahSantri->tempat_lahir }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Tanggal Lahir</b></td>
                  <td class="col-sm-6 col-xs-6">{{ tgl_indo($santri->ayahSantri->tgl_lahir) }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Hubungan Ayah dengan Santri</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->ayahSantri->hbgn_ayah_santri }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Status Ayah</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->ayahSantri->status_ayah }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Alamat</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->ayahSantri->alamat }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Kota/Kabupaten</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->ayahSantri->kota }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Provinsi</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->ayahSantri->provinsi }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Kode Pos</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->ayahSantri->kode_pos }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Telp</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->ayahSantri->telepon }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Pendidikan</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->ayahSantri->pendidikan }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Pekerjaan</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->ayahSantri->pekerjaan }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Penghasilan Perbulan</b></td>
                  <td class="col-sm-6 col-xs-6">
                    @if($santri->ayahSantri->penghasilan == '<1jt')
                    <label class="text-warning">Kurang dari Rp 1000.000,-</label>
                    @elseif($santri->ayahSantri->penghasilan == '1jt-2jt')
                    <label class="text-primary">Rp 1.000.000,- - Rp 2.0000.000,-</label>
                    @elseif($santri->ayahSantri->penghasilan == '2jt-3jt')
                    <label class="text-primary">Rp 2.000.000,- - Rp 3.0000.000,-</label>
                    @elseif($santri->ayahSantri->penghasilan == '4jt-5jt')
                    <label class="text-primary">Rp 4.000.000,- - Rp 5.000.000,-</label>
                    @elseif($santri->ayahSantri->penghasilan == '10jt')
                    <label class="text-primary">Lebih dari Rp 10.000.000,-</label>
                    @elseif($santri->ayahSantri->penghasilan == '>5jt')
                    <label class="text-primary">Lebih dari > Rp 5.000.000,-</label>
                    @elseif($santri->ayahSantri->penghasilan == '10jt')
                    <label class="text-primary">Lebih dari Rp 10.000.000,-</label>
                    @endif
                  </td>
                </tr>
              </tbody>
            </table>

          </div>
          <div class="col-lg-6">
            <div>
              <h3>Identitas Ibu</h3>
              <div class="form-group">
                <a style="float:right" class="btn btn-success" href="{{ base_url('admin/parents/ibu/'.$santri->id_santri) }}">Ubah data Ibu</a>
                <br>
              </div>
              <hr>
            </div>
            <table class="table table-bordered table-hover">
              <tbody>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Nama Lengkap</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->ibuSantri->nama_lengkap }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Nama Panggilan</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->ibuSantri->panggilan }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>NIK</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->ibuSantri->nik }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Tempat Lahir</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->ibuSantri->tempat_lahir }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Tanggal Lahir</b></td>
                  <td class="col-sm-6 col-xs-6">{{ tgl_indo($santri->ibuSantri->tgl_lahir) }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Hubungan Ayah dengan Santri</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->ibuSantri->hbgn_ibu_santri }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Status Ayah</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->ibuSantri->status_ibu }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Alamat</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->ibuSantri->alamat }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Kota/Kabupaten</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->ibuSantri->kota }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Provinsi</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->ibuSantri->provinsi }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Kode Pos</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->ibuSantri->kode_pos }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Telp</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->ibuSantri->telepon }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Pendidikan</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->ibuSantri->pendidikan }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Pekerjaan</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->ibuSantri->pekerjaan }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Penghasilan Perbulan</b></td>
                  <td class="col-sm-6 col-xs-6">
                    @if($santri->ibuSantri->penghasilan == '<1jt')
                    <label class="text-warning">Kurang dari Rp 1000.000,-</label>
                    @elseif($santri->ayahSantri->penghasilan == '1jt-2jt')
                    <label class="text-primary">Rp 1.000.000,- - Rp 2.0000.000,-</label>
                    @elseif($santri->ayahSantri->penghasilan == '2jt-3jt')
                    <label class="text-primary">Rp 2.000.000,- - Rp 3.0000.000,-</label>
                    @elseif($santri->ayahSantri->penghasilan == '4jt-5jt')
                    <label class="text-primary">Rp 4.000.000,- - Rp 5.000.000,-</label>
                    @elseif($santri->ayahSantri->penghasilan == '10jt')
                    <label class="text-primary">Lebih dari Rp 10.000.000,-</label>
                    @elseif($santri->ayahSantri->penghasilan == '>5jt')
                    <label class="text-primary">Lebih dari > Rp 5.000.000,-</label>
                    @elseif($santri->ayahSantri->penghasilan == '10jt')
                    <label class="text-primary">Lebih dari Rp 10.000.000,-</label>
                    @endif
                  </td>
                </tr>
              </tbody>
            </table>

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="col-lg-6">
            <div>
              <h3>Identitas Wali</h3>
              <div class="form-group">
                <a style="float:right" class="btn btn-success" href="{{ base_url('admin/parents/wali/'.$santri->id_santri) }}">Ubah data Wali</a>
                <br>
              </div>
              <hr>
            </div>
            <table class="table table-bordered table-hover">
              <tbody>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Nama Lengkap</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->waliSantri->nama_lengkap }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Nama Panggilan</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->waliSantri->panggilan }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>NIK</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->waliSantri->nik }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Tempat Lahir</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->waliSantri->tempat_lahir }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Tanggal Lahir</b></td>
                  <td class="col-sm-6 col-xs-6">{{ tgl_indo($santri->waliSantri->tgl_lahir) }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Hubungan Ayah dengan Santri</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->waliSantri->hbgn_wali_santri }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Status Ayah</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->waliSantri->status_wali }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Alamat</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->waliSantri->alamat }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Kota/Kabupaten</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->waliSantri->kota }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Provinsi</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->waliSantri->provinsi }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Kode Pos</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->waliSantri->kode_pos }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Telp</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->waliSantri->telepon }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Pendidikan</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->waliSantri->pendidikan }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Pekerjaan</b></td>
                  <td class="col-sm-6 col-xs-6">{{ $santri->waliSantri->pekerjaan }}</td>
                </tr>
                <tr>
                  <td class="col-sm-6 col-xs-6"><b>Penghasilan Perbulan</b></td>
                  <td class="col-sm-6 col-xs-6">
                    @if($santri->waliSantri->penghasilan == '<1jt')
                    <label class="text-warning">Kurang dari Rp 1.000.000,-</label>
                    @elseif($santri->ayahSantri->penghasilan == '1jt-2jt')
                    <label class="text-primary">Rp 1.000.000,- - Rp 2.0000.000,-</label>
                    @elseif($santri->ayahSantri->penghasilan == '2jt-3jt')
                    <label class="text-primary">Rp 2.000.000,- - Rp 3.0000.000,-</label>
                    @elseif($santri->ayahSantri->penghasilan == '4jt-5jt')
                    <label class="text-primary">Rp 4.000.000,- - Rp 5.000.000,-</label>
                    @elseif($santri->ayahSantri->penghasilan == '10jt')
                    <label class="text-primary">Lebih dari Rp 10.000.000,-</label>
                    @elseif($santri->ayahSantri->penghasilan == '>5jt')
                    <label class="text-primary">Lebih dari > Rp 5.000.000,-</label>
                    @elseif($santri->ayahSantri->penghasilan == '10jt')
                    <label class="text-primary">Lebih dari Rp 10.000.000,-</label>
                    @endif
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div><!-- identitas orang tua dan wali end -->

  <!-- berkas-berkas -->
  <div class="panel panel-default">
    <div class="panel-heading">
      <div class="row">
        <div class="col-lg-12">
          <h2>Berkas Berkas</h2>
          <div class="form-group">
            <a style="float:right" class="btn btn-success" href="{{ base_url('admin/berkas/archive/'.$santri->id_santri) }}">Ubah Berkas</a>
            <br>
          </div>
          <hr>
          <!-- foto -->
          <div class="col-lg-12">
            <div>
              <h3>Foto-foto</h3>
              <hr>
            </div>
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th style="text-align:center">Foto Santri</th>
                  <th style="text-align:center">Foto Wali Santri</th>
                  <th style="text-align:center">Foto Ayah Santri</th>
                  <th style="text-align:center">Foto Ibu Santri</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <center>
                      @if($santri->berkasSantri->foto_santri)
                      <img id="santri" src="{{ base_url('assets/uploads/').$santri->berkasSantri->foto_santri }}" alt="your image" style="width:150px; height:200px; background-color:#eeeeee;" />
                      @else
                      <p>Gambar belum di unggah</p>
                      @endif
                    </center>
                  </td>
                  <td>
                    <center>
                      @if($santri->berkasSantri->foto_santri)
                      <img id="santri" src="{{ base_url('assets/uploads/').$santri->berkasSantri->foto_wali_santri }}" alt="your image" style="width:150px; height:200px; background-color:#eeeeee;" />
                      @else
                      <p>Gambar belum di unggah</p>
                      @endif
                    </center>
                  </td>
                  <td>
                    <center>
                      @if($santri->berkasSantri->foto_santri)
                      <img id="santri" src="{{ base_url('assets/uploads/').$santri->berkasSantri->foto_ayah_santri }}" alt="your image" style="width:150px; height:200px; background-color:#eeeeee;" />
                      @else
                      <p>Gambar belum di unggah</p>
                      @endif
                    </center>
                  </td>
                  <td>
                    <center>
                      @if($santri->berkasSantri->foto_santri)
                      <img id="santri" src="{{ base_url('assets/uploads/').$santri->berkasSantri->foto_ibu_santri }}" alt="your image" style="width:150px; height:200px; background-color:#eeeeee;" />
                      @else
                      <p>Gambar belum di unggah</p>
                      @endif
                    </center>
                  </td>
                </tr>
              </tbody>
            </table>



          </div>
          <!-- foto end -->

          <!-- dokumen -->
          <div class="col-lg-12">
            <div>
              <h3>Dokumen</h3>
              <hr>
            </div>
            <table class="table table-bordered table-hover">
              <tbody>
                <tr>
                  <th class="col-sm-4 col-xs-4">Akte</th>
                  <td class="col-sm-8 col-xs-8">
                    @if($santri->berkasSantri->akta_santri)
                    <a target="_blank" href="{{ base_url('assets/uploads/').$santri->berkasSantri->akta_santri }}">File akta santri</a>
                    @else
                    <span class="label label-danger">File belum di unggah</span>
                    @endif
                  </td>
                </tr>
                <tr>
                  <th class="col-sm-4 col-xs-4">KK</th>
                  <td class="col-sm-8 col-xs-8">
                    @if($santri->berkasSantri->kk_santri)
                    <a target="_blank" href="{{ base_url('assets/uploads/').$santri->berkasSantri->kk_santri }}">File akta santri</a>
                    @else
                    <span class="label label-danger">File belum di unggah</span>
                    @endif
                  </td>
                </tr>
                <tr>
                  <th class="col-sm-4 col-xs-4">BPJS</th>
                  <td class="col-sm-8 col-xs-8">
                    @if($santri->berkasSantri->bpjs_santri)
                    <a target="_blank" href="{{ base_url('assets/uploads/').$santri->berkasSantri->bpjs_santri }}">File akta santri</a>
                    @else
                    <span class="label label-danger">File belum di unggah</span>
                    @endif
                  </td>
                </tr>
                <tr>
                  <th class="col-sm-4 col-xs-4">KTP</th>
                  <td class="col-sm-8 col-xs-8">
                    @if($santri->berkasSantri->ktp_santri)
                    <a target="_blank" href="{{ base_url('assets/uploads/').$santri->berkasSantri->kk_santri }}">File akta santri</a>
                    @else
                    <span class="label label-danger">File belum di unggah</span>
                    @endif
                  </td>
                </tr>
                <tr>
                  <th class="col-sm-4 col-xs-4">KTP Wali</th>
                  <td class="col-sm-8 col-xs-8">
                    @if($santri->berkasSantri->ktp_wali)
                    <a target="_blank" href="{{ base_url('assets/uploads/').$santri->berkasSantri->ktp_wali }}">File akta santri</a>
                    @else
                    <span class="label label-danger">File belum di unggah</span>
                    @endif
                  </td>
                </tr>
                <tr>
                  <th class="col-sm-4 col-xs-4">KTP Ayah</th>
                  <td class="col-sm-8 col-xs-8">
                    @if($santri->berkasSantri->ktp_ayah)
                    <a target="_blank" href="{{ base_url('assets/uploads/').$santri->berkasSantri->ktp_ayah }}">File akta santri</a>
                    @else
                    <span class="label label-danger">File belum di unggah</span>
                    @endif
                  </td>
                </tr>
                <tr>
                  <th class="col-sm-4 col-xs-4">KTP Ibu</th>
                  <td class="col-sm-8 col-xs-8">
                    @if($santri->berkasSantri->ktp_ibu)
                    <a target="_blank" href="{{ base_url('assets/uploads/').$santri->berkasSantri->ktp_ibu }}">File akta santri</a>
                    @else
                    <span class="label label-danger">File belum di unggah</span>
                    @endif
                  </td>
                </tr>
                <tr>
                  <th class="col-sm-4 col-xs-4">Ijazah</th>
                  <td class="col-sm-8 col-xs-8">
                    @if($santri->berkasSantri->ijazah_santri)
                    <a target="_blank" href="{{ base_url('assets/uploads/').$santri->berkasSantri->ijazah_santri }}">File akta santri</a>
                    @else
                    <span class="label label-danger">File belum di unggah</span>
                    @endif
                  </td>
                </tr>
                <tr>
                  <th class="col-sm-4 col-xs-4">SKHUN</th>
                  <td class="col-sm-8 col-xs-8">
                    @if($santri->berkasSantri->skhun_santri)
                    <a target="_blank" href="{{ base_url('assets/uploads/').$santri->berkasSantri->skhun_santri }}">File akta santri</a>
                    @else
                    <span class="label label-danger">File belum di unggah</span>
                    @endif
                  </td>
                </tr>

              </tbody>
            </table>

          </div>
          <!-- dokumen end -->
        </div>
      </div>
    </div>
  </div>
  <!-- berkas-berkas end -->
  @stop
