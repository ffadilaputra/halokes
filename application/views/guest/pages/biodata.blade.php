@extends('guest.template')

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

  <!-- pendidikan sebelumnya -->
  <div class="panel panel-default">
    <div class="panel-heading">
      <div class="row">
        <div class="col-lg-12">
          <h2>Pendidikan Sebelumnya</h2>
          <hr>
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
          <!-- foto -->
          <div class="col-lg-12">
            <div>
              <h3>Foto</h3>
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
        </div>
      </div>
    </div>
  </div>
  <!-- berkas-berkas end -->
  @stop
