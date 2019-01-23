@extends('front.template')
@section('content')


<div class="wrap">
    <section class="site-section py-lg">
      <div class="container">

        <div class="row blog-entries element-animate">

          <div class="col-md-12 col-lg-12 main-content">

            <h1 class="mb-1" style="text-align:center">PENDAFTARAN</h1>

            <div class="post-content-body">

                <div class="comment-form-wrap pt-5">
                    {{-- <form action="#" class="p-5 bg-light"> --}}
                      <?= form_open_multipart('ppdb/santri/store') ?>
                        <!-- identitas siswa -->
                        <div>
                            <div>
                                <p><span class="w3-tag w3-xlarge" style="background-color:#28a745;padding-left:50px;">Identitas Siswa</span></p>
                            </div>

                            <div class="row">
                                <!-- left -->
                                <div class="col-md-12 col-lg-6 main-content">
                                    <div class="form-group">
                                        <label for="tingkatPendidikan">Tingkat Pendidikan</label>
                                        <select class="form-control" name="tingkat_pendidikan" id="" value={{ old('tingkat_pendidikan') }}>
                                          <option @if(old('tingkat_pendidikan') == 'ma') selected @endif name="ma">Madarasah Aliyah</option>
                                          <option @if(old('tingkat_pendidikan') == 'mt') selected @endif value="mt">Madarasah Tsanawiyah</option>
                                          <option @if(old('tingkat_pendidikan') == 'md') selected @endif name="md">Madarasah Diniyah</option>
                                        </select>
                                      </div>
                                    <div class="form-group">
                                    <label for="">Jenis Siswa</label>
                                    <select class="form-control" name="jenis_siswa" value="{{ old('jenis_siswa') }}">
                                        <option @if(old('jenis_siswa') == 'lama') selected @endif value="lama">Lama</option>
                                        <option @if(old('jenis_siswa') == 'baru') selected @endif value="baru">Baru</option>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="noinduk">No Induk *</label>
                                        <input name="no_induk" type="number" class="form-control" id="noinduk" value="{{ old('no_induk') }}">
                                        @if($errors->has('no_induk'))
                                          <small class="text-danger">{{ $errors->first('no_induk') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="nisn">NISN *</label>
                                        <input name="nisn" type="number" class="form-control" id="nisn" value="{{ old('nisn') }}">
                                        @if($errors->has('nisn'))
                                          <small class="text-danger">{{ $errors->first('nisn') }}</small>
                                        @endif
                                      </div>
                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap *</label>
                                        <input name="nama_lengkap" type="text" class="form-control" id="nama" value="{{ old('nama_lengkap') }}">
                                        @if($errors->has('nama_lengkap'))
                                          <small class="text-danger">{{ $errors->first('nama_lengkap') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="namaPanggilan">Nama Panggilan *</label>
                                        <input name="nama_panggilan" type="text" class="form-control" id="namaPanggilan" value="{{ old('nama_panggilan') }}">
                                        @if($errors->has('nama_panggilan'))
                                          <small class="text-danger">{{ $errors->first('nama_panggilan') }}</small>
                                        @endif
                                      </div>
                                    <div class="form-group">
                                        <label for="nik">NIK *</label>
                                        <input name="nik" type="number" class="form-control" id="nik" value="{{ old('nik') }}">
                                        @if($errors->has('nik'))
                                          <small class="text-danger">{{ $errors->first('nik') }}</small>
                                        @endif
                                      </div>
                                    <div class="form-group">
                                        <label for="kk">No KK *</label>
                                        <input name="no_kk" type="number" class="form-control" id="kk" value="{{ old('no_kk') }}">
                                        @if($errors->has('no_kk'))
                                          <small class="text-danger">{{ $errors->first('no_kk') }}</small>
                                        @endif
                                      </div>
                                    <div class="form-group">
                                        <label for="tempatLahir">Tempat Lahir *</label>
                                    <input name="tempat_lahir_siswa" type="text" class="form-control" id="tempatLahir" value="{{ old('tempat_lahir_siswa') }}">
                                        @if($errors->has('tempat_lahir_siswa'))
                                          <small class="text-danger">{{ $errors->first('tempat_lahir_siswa') }}</small>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <!-- tgl -->
                                        <div class="col-sm-3 col-xs-12">
                                            <div class="form-group">
                                                <label for="">Tgl</label>
                                                <input type="number" min="1" max="31"  class="form-control" name="tgl_siswa"  id="tgl" required onkeyup="capt()" value="{{ old('tgl_siswa')}}">
                                                @if($errors->has('tgl_siswa'))
                                                  <small class="text-danger">{{ $errors->first('tgl_siswa') }}</small>
                                                @endif
                                            </div>
                                        <!--/.form-group-->
                                        </div>
                                        <!--/.col-->
                                        <!-- bln -->
                                        <div class="col-sm-5 col-xs-12">
                                            <div class="form-group">
                                            <label for="">Bulan</label>
                                            <select class="form-control" name="bulan_siswa" id="" value="{{ old('bulan_siswa') }}">
                                                <option @if(old('bulan_siswa') == 1) selected @endif value="1">Januari</option>
                                                <option @if(old('bulan_siswa') == 2) selected @endif value="2">Februari</option>
                                                <option @if(old('bulan_siswa') == 3) selected @endif value="3">Maret</option>
                                                <option @if(old('bulan_siswa') == 4) selected @endif value="4">April</option>
                                                <option @if(old('bulan_siswa') == 5) selected @endif value="5">Mei</option>
                                                <option @if(old('bulan_siswa') == 6) selected @endif value="6">Juni</option>
                                                <option @if(old('bulan_siswa') == 7) selected @endif value="7">Juli</option>
                                                <option @if(old('bulan_siswa') == 8) selected @endif value="8">Agustus</option>
                                                <option @if(old('bulan_siswa') == 9) selected @endif value="9">September</option>
                                                <option @if(old('bulan_siswa') == 10) selected @endif value="10">Oktober</option>
                                                <option @if(old('bulan_siswa') == 11) selected @endif value="11">November</option>
                                                <option @if(old('bulan_siswa') == 12) selected @endif value="12">Desember</option>
                                            </select>
                                            </div>
                                        </div>
                                        <!--/.col-->
                                        <!-- thn -->
                                        <div class="col-sm-4 col-xs-12">
                                            <div class="form-group">
                                                <label for="">Tahun</label>
                                            <input name="tahun_siswa"  type="number" min="1990" max="2018" class="form-control medqInput" id="tahun"  required onkeyup="capt()" value="{{ old('tahun_siswa') }}">
                                                @if($errors->has('tahun_siswa'))
                                                  <small class="text-danger">{{ $errors->first('tahun_siswa') }}</small>
                                                @endif
                                              </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- right -->
                                <div class="col-md-12 col-lg-6 main-content">
                                    <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <select class="form-control" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}">
                                        <option @if(old('jenis_kelamin') == 'laki-laki') selected @endif value="laki-laki">Laki-Laki</option>
                                        <option @if(old('jenis_kelamin') == 'perempuan') selected @endif value="perempuan">Perempuan</option>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                    <label for="">Status dalam Keluarga</label>
                                    <select class="form-control" name="status_keluarga" value="{{ old('status_keluarga') }}">
                                        <option @if(old('status_keluarga') == 'a') selected @endif value="a">A</option>
                                        <option @if(old('status_keluarga') == 'b') selected @endif value="b">B</option>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="anakke">Anak ke *</label>
                                        <input name="anak_ke" type="number" class="form-control" id="anakke" value="{{ old('anak_ke') }}">
                                        @if($errors->has('anak_ke'))
                                          <small class="text-danger">{{ $errors->first('anak_ke') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="jmlsaudara">Jumlah Saudara *</label>
                                        <input name="jml_sdr" type="number" class="form-control" id="jmlsaudara" value="{{ old('jml_sdr') }}">
                                        @if($errors->has('jml_sdr'))
                                          <small class="text-danger">{{ $errors->first('jml_sdr') }}</small>
                                        @endif
                                      </div>
                                    <div class="form-group">
                                        <label for="kip">No KIP *</label>
                                        <input name="no_kip" type="number" class="form-control" id="kip" value="{{ old('no_kip') }}">
                                        @if($errors->has('no_kip'))
                                          <small class="text-danger">{{ $errors->first('no_kip') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="bpjs">No BPJS *</label>
                                        <input name="no_bpjs" type="number" class="form-control" id="bpjs" value="{{ old('no_bpjs') }}">
                                        @if($errors->has('no_bpjs'))
                                          <small class="text-danger">{{ $errors->first('no_bpjs') }}</small>
                                        @endif
                                      </div>
                                    <div class="form-group">
                                        <label for="jamkes">No Jamkes *</label>
                                        <input name="no_jamkes" type="number" class="form-control" id="jamkes" value="{{ old('no_jamkes') }}">
                                        @if($errors->has('no_jamkes'))
                                          <small class="text-danger">{{ $errors->first('no_jamkes') }}</small>
                                        @endif
                                      </div>
                                    <div class="form-group">
                                    <label for="hobi">Hobi</label>
                                    <select name="hobi" class="form-control" id="hobi" value="{{ old('hobi') }}">
                                        <option @if(old('hobi') == 'menulis') selected @endif value="menulis">Menulis</option>
                                        <option @if(old('hobi') == 'olahraga') selected @endif value="olahraga">Olahraga</option>
                                        <option @if(old('hobi') == 'berenang') selected @endif value="berenang">Berenang</option>
                                        <option @if(old('hobi') == 'membaca') selected @endif value="membaca">Membaca</option>
                                        <option @if(old('hobi') == 'rekreasi') selected @endif value="rekreasi">Rekreasi</option>
                                        <option @if(old('hobi') == 'kesenian') selected @endif value="kesenian">Kesenian</option>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                    <label for="cita_cita">Cita-cita</label>
                                    <select class="form-control" name="cita_cita" id="citacita" value="{{ old('cita_cita') }}">
                                        <option @if(old('cita_cita') == 'pns') selected @endif value="pns">PNS</option>
                                        <option @if(old('cita_cita') == 'dokter') selected @endif value="dokter">Dokter</option>
                                        <option @if(old('cita_cita') == 'pilot') selected @endif value="pilot">Pilot</option>
                                        <option @if(old('cita_cita') == 'politikus') selected @endif value="politikus">Politikus</option>
                                        <option @if(old('cita_cita') == 'guru/dosen') selected @endif value="guru/dosen">Guru/Dosen</option>
                                        <option @if(old('cita_cita') == 'wiraswasta') selected @endif value="wiraswasta">Wiraswasta</option>
                                        <option @if(old('cita_cita') == 'seni') selected @endif value="seni">Pekerja Seni/Lukis/Artis/Sejenis</option>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                    <label for="kebKhusus">Berkebutuhan Khusus</label>
                                    <select class="form-control" name="keb_khusus" id="kebKhusus" value="{{ old('keb_khusus') }}">
                                        <option @if(old('keb_khusus') == 'null') selected @endif value="null">-- Piih --</option>
                                        <option @if(old('keb_khusus') == 'ya') selected @endif value="ya">Ya</option>
                                        <option @if(old('keb_khusus') == 'tidak') selected @endif value="tidak">Tidak</option>
                                    </select>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <br><br>

                        <!-- pendidikan sebelumnya -->
                        <div>
                            <div>
                                <p><span class="w3-tag w3-xlarge" style="background-color:#28a745; padding-left:50px;">Pendidikan Sebelumnya</span></p>
                            </div>

                            <div class="row">
                                <!-- left -->
                                <div class="col-md-12 col-lg-6 main-content">
                                    <div class="form-group">
                                        <label for="sekolah">Nama Sekolah *</label>
                                        <input name="nama_sekolah_siswa" type="text" class="form-control" id="sekolah" value="{{ old('nama_sekolah_siswa') }}">
                                        @if($errors->has('nama_sekolah_siswa'))
                                          <small class="text-danger">{{ $errors->first('nama_sekolah_siswa') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="jenisSekolah">Jenis Sekolah</label>
                                        <select class="form-control" name="jenis_sekolah_siswa" id="jenisSekolah" value="{{ old('jenis_sekolah_siswa') }}">
                                            <option @if(old('jenis_sekolah_siswa') == 'sd') selected @endif value="sd">SD</option>
                                            <option @if(old('jenis_sekolah_siswa') == 'mi') selected @endif value="mi">MI</option>
                                            <option @if(old('jenis_sekolah_siswa') == 'smp') selected @endif value="smp">SMP</option>
                                            <option @if(old('jenis_sekolah_siswa') == 'mts') selected @endif value="mts">MTs</option>
                                            <option @if(old('jenis_sekolah_siswa') == 'sma/smk') selected @endif value="sma/smk">SMA/SMK</option>
                                            <option @if(old('jenis_sekolah_siswa') == 'ma') selected @endif value="ma">MA</option>
                                            <option @if(old('jenis_sekolah_siswa') == 'paketa') selected @endif value="paketa">Paket A</option>
                                            <option @if(old('jenis_sekolah_siswa') == 'paketb') selected @endif value="paketb">Paket B</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="statusSekolah">Status Sekolah</label>
                                        <select class="form-control" name="status_sekolah_siswa" id="statusSekolah" value="{{ old('status_sekolah_siswa') }}">
                                            <option @if(old('status_sekolah_siswa') == 'negeri') selected @endif value="negeri">Negeri</option>
                                            <option @if(old('status_sekolah_siswa') == 'swasta') selected @endif value="swasta">Swasta</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat Sekolah *</label>
                                        <input name="alamat_sekolah_siswa" type="text" class="form-control" id="alamat" value="{{ old('alamat_sekolah_siswa') }}">
                                        @if($errors->has('alamat_sekolah_siswa'))
                                          <small class="text-danger">{{ $errors->first('alamat_sekolah_siswa') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="kabkota">Kota/Kabupaten *</label>
                                        <input name="kota" type="text" class="form-control" id="kabkota" value="{{ old('kota') }}">
                                        @if($errors->has('kota'))
                                          <small class="text-danger">{{ $errors->first('kota') }}</small>
                                        @endif
                                      </div>
                                    <div class="form-group">
                                        <label for="prov">Provinsi *</label>
                                        <input name="provinsi_siswa" type="text" class="form-control" id="prov" value="{{ old('provinsi_siswa') }}">
                                        @if($errors->has('provinsi_siswa'))
                                          <small class="text-danger">{{ $errors->first('provinsi_siswa') }}</small>
                                        @endif
                                    </div>
                                </div> <!-- end left -->


                                <!-- right -->
                                <div class="col-md-12 col-lg-6 main-content">
                                    <div class="form-group">
                                        <label for="nss">NSS/NSM *</label>
                                        <input name="nss_siswa" type="number" class="form-control" id="nss">
                                        @if($errors->has('nss_siswa'))
                                          <small class="text-danger">{{ $errors->first('nss_siswa') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="npsn">NPSN *</label>
                                        <input name="npsn_siswa" type="number" class="form-control" id="npsn">
                                        @if($errors->has('npsn_siswa'))
                                          <small class="text-danger">{{ $errors->first('npsn_siswa') }}</small>
                                        @endif
                                      </div>
                                    <div class="form-group">
                                        <label for="ijazah">No Seri Ijazah *</label>
                                        <input name="no_ijazah_siswa" type="text" class="form-control" id="noijazah">
                                        @if($errors->has('no_ijazah_siswa'))
                                          <small class="text-danger">{{ $errors->first('no_ijazah_siswa') }}</small>
                                        @endif
                                      </div>
                                    <div class="form-group">
                                        <label for="skhun">No Seri SKHUN *</label>
                                        <input name="skhun_siswa" type="text" class="form-control" id="skhun">
                                        @if($errors->has('skhun_siswa'))
                                          <small class="text-danger">{{ $errors->first('skhun_siswa') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="noUn">No Peserta Ujian UN *</label>
                                        <input name="no_un_siswa" type="text" class="form-control" id="noUn">
                                        @if($errors->has('no_un_siswa'))
                                          <small class="text-danger">{{ $errors->first('no_un_siswa') }}</small>
                                        @endif
                                    </div>

                                </div> <!-- end right -->
                            </div> <!-- end row -->

                        </div> <!-- pendidikan sebelumnya end-->

                        <br><br>

                        <!-- identitas ortu santri -->
                        <div>
                            <div>
                                <p><span class="w3-tag w3-xlarge" style="background-color:#28a745; padding-left:50px;">Identitas Orang Tua</span></p>
                            </div>

                            <div class="row">
                                <!-- left -->
                                <div class="col-md-12 col-lg-6 main-content">
                                    <div>
                                        <p><span class="w3-tag w3-xlarge" style="background-color:#28a745;padding-left:25px;">Identitas Ayah</span></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="namaAyah">Nama Lengkap *</label>
                                    <input name="nama_ayah_siswa" type="text" class="form-control" id="namaAyah" value="{{ old('nama_ayah_siswa') }}">
                                        @if($errors->has('nama_ayah_siswa'))
                                          <small class="text-danger">{{ $errors->first('nama_ayah_siswa') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="panggilanAyah">Nama Panggilan *</label>
                                        <input name="napang_ayah_siswa" type="text" class="form-control" id="panggilanAyah" value="{{ old('napang_ayah_siswa') }}">
                                        @if($errors->has('napang_ayah_siswa'))
                                          <small class="text-danger">{{ $errors->first('napang_ayah_siswa') }}</small>
                                        @endif
                                  </div>
                                    <div class="form-group">
                                        <label for="nikAyah">NIK *</label>
                                    <input name="nik_ayah_siswa" type="number" class="form-control" id="nikAyah" value="{{ old('nik_ayah_siswa') }}">
                                    @if($errors->has('nik_ayah_siswa'))
                                      <small class="text-danger">{{ $errors->first('nik_ayah_siswa') }}</small>
                                    @endif
                                  </div>
                                    <div class="form-group">
                                        <label for="tempatLahir">Tempat Lahir *</label>
                                    <input name="tempat_lahir_ayah" type="text" class="form-control" id="tempat_lahir_ayah" value="{{ old('tempat_lahir_ayah') }}">
                                    @if($errors->has('tempat_lahir_ayah'))
                                        <small class="text-danger">{{ $errors->first('tempat_lahir_ayah') }}</small>
                                    @endif
                                  </div>
                                    <div class="row">
                                        <!-- tgl -->
                                        <div class="col-sm-3 col-xs-12">
                                            <div class="form-group">
                                                <label for="">Tgl</label>
                                                <input type="number" min="1" max="31"  class="form-control" name="tgl_ayah"  id="tgl" required onkeyup="capt()" value="{{ old('tgl_ayah')}}">
                                                @if($errors->has('tgl_ayah'))
                                                  <small class="text-danger">{{ $errors->first('tgl_ayah') }}</small>
                                                @endif
                                            </div>
                                        <!--/.form-group-->
                                        </div>
                                        <!--/.col-->
                                        <!-- bln -->
                                        <div class="col-sm-5 col-xs-12">
                                            <div class="form-group">
                                            <label for="">Bulan</label>
                                            <select class="form-control" name="bulan_ayah" id="" value="{{ old('bulan_ayah') }}">
                                                <option @if(old('bulan_ayah') == 1) selected @endif value="1">Januari</option>
                                                <option @if(old('bulan_ayah') == 2) selected @endif value="2">Februari</option>
                                                <option @if(old('bulan_ayah') == 3) selected @endif value="3">Maret</option>
                                                <option @if(old('bulan_ayah') == 4) selected @endif value="4">April</option>
                                                <option @if(old('bulan_ayah') == 5) selected @endif value="5">Mei</option>
                                                <option @if(old('bulan_ayah') == 6) selected @endif value="6">Juni</option>
                                                <option @if(old('bulan_ayah') == 7) selected @endif value="7">Juli</option>
                                                <option @if(old('bulan_ayah') == 8) selected @endif value="8">Agustus</option>
                                                <option @if(old('bulan_ayah') == 9) selected @endif value="9">September</option>
                                                <option @if(old('bulan_ayah') == 10) selected @endif value="10">Oktober</option>
                                                <option @if(old('bulan_ayah') == 11) selected @endif value="11">November</option>
                                                <option @if(old('bulan_ayah') == 12) selected @endif value="12">Desember</option>
                                            </select>
                                            </div>
                                        </div>
                                        <!--/.col-->
                                        <!-- thn -->
                                        <div class="col-sm-4 col-xs-12">
                                            <div class="form-group">
                                                <label for="">Tahun</label>
                                                <input name="tahun_ayah"  type="number" min="1990" max="2018" class="form-control medqInput" id="tahun"  required onkeyup="capt()" value="{{ old('tahun_ayah') }}">
                                                @if($errors->has('tahun_ayah'))
                                                  <small class="text-danger">{{ $errors->first('tahun_ayah') }}</small>
                                                @endif
                                              </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                      <label>Hubungan Ayah dengan Santri</label>
                                      <select class="form-control" name="hbgn_ayah_santri">
                                        <option @if(old('hbgn_ayah_santri') == 'kandung') selected @endif value="kandung">Ayah Kandung</option>
                                        <option @if(old('hbgn_ayah_santri') == 'tiri') selected @endif value="tiri">Ayah Tiri</option>
                                        <option @if(old('hbgn_ayah_santri') == 'angkat') selected @endif value="angkat">Ayah Angkat</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label>Status Ayah</label>
                                      <select class="form-control" name="status_ayah_santri">
                                        <option @if(old('status_ayah_santri') == 'hidup') selected @endif value="hidup">Hidup</option>
                                        <option @if(old('status_ayah_santri') == 'meninggal') selected @endif value="meninggal">Meninggal</option>
                                        <option @if(old('status_ayah_santri') == 'hilang') selected @endif value="hilang">Hilang</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat *</label>
                                        <input name="alamat_ayah" type="text" class="form-control" id="alamat" value="{{ old('alamat_ayah') }}">
                                        @if($errors->has('alamat_ayah'))
                                          <small class="text-danger">{{ $errors->first('alamat_ayah') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="kabkota">Kota/Kabupaten *</label>
                                        <input name="kabkota_ayah" type="text" class="form-control" id="kabkota" value="{{ old('kabkota_ayah') }}">
                                        @if($errors->has('kabkota_ayah'))
                                          <small class="text-danger">{{ $errors->first('kabkota_ayah') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="prov">Provinsi *</label>
                                        <input name="provinsi_ayah" type="text" class="form-control" id="prov" value="{{ old('provinsi_ayah') }}">
                                        @if($errors->has('provinsi_ayah'))
                                          <small class="text-danger">{{ $errors->first('provinsi_ayah') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="kodepos">Kode Pos *</label>
                                        <input name="kodepos_ayah" type="number" class="form-control" id="kodepos" value="{{ old('kodepos_ayah') }}">
                                        @if($errors->has('kodepos_ayah'))
                                          <small class="text-danger">{{ $errors->first('kodepos_ayah') }}</small>
                                        @endif
                                      </div>
                                    <div class="form-group">
                                        <label for="telp">Telp *</label>
                                        <input name="telepon_ayah" type="number" class="form-control" id="telp">
                                        @if($errors->has('telepon_ayah'))
                                          <small class="text-danger">{{ $errors->first('telepon_ayah') }}</small>
                                        @endif
                                      </div>
                                    <div class="form-group">
                                      <label for="">Pendidikan</label>
                                      <select class="form-control" name="pendidikan_terakhir_ayah" id="" value="{{ old('pendidikan_terakhir_ayah') }}">
                                        <option @if(old('pendidikan_terakhir_ayah') == 'SD') selected @endif value="SD">SD</option>
                                        <option @if(old('pendidikan_terakhir_ayah') == 'SMP') selected @endif value="SMP">SMP</option>
                                        <option @if(old('pendidikan_terakhir_ayah') == 'SMA') selected @endif value="SMA">SMA</option>
                                        <option @if(old('pendidikan_terakhir_ayah') == 'D1') selected @endif value="D1">D1</option>
                                        <option @if(old('pendidikan_terakhir_ayah') == 'D2') selected @endif value="D3">D3</option>
                                        <option @if(old('pendidikan_terakhir_ayah') == 'D4') selected @endif value="D4">D4</option>
                                        <option @if(old('pendidikan_terakhir_ayah') == 'S1') selected @endif value="S1">S1</option>
                                        <option @if(old('pendidikan_terakhir_ayah') == 'S2') selected @endif value="S2">S2</option>
                                        <option @if(old('pendidikan_terakhir_ayah') == 'S3') selected @endif value="S3">S3</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="">Pekerjaan</label>
                                      <select class="form-control" name="pekerjaan_ayah" id="">
                                        <option @if(old('pekerjaan_ayah') == 'PNS') selected @endif value="PNS">PNS</option>
                                        <option @if(old('pekerjaan_ayah') == 'TNI/Polri') selected @endif value="TNI/Polri">TNI/Polri</option>
                                        <option @if(old('pekerjaan_ayah') == 'Pengusaha') selected @endif value="Pengusaha">Pengusaha</option>
                                        <option @if(old('pekerjaan_ayah') == 'Wiraswasta') selected @endif value="Wiraswasta">Wiraswasta</option>
                                        <option @if(old('pekerjaan_ayah') == 'Petani/Peternak') selected @endif value="Petani/Peternak">Petani/Peternak</option>
                                        <option @if(old('pekerjaan_ayah') == 'Sopir/Masinis') selected @endif value="Sopir/Masinis">Sopir/Masinis</option>
                                        <option @if(old('pekerjaan_ayah') == 'Pensiunan') selected @endif value="Pensiunan">Pensiunan</option>
                                        <option @if(old('pekerjaan_ayah') == 'TidahBekerja') selected @endif value="TidahBekerja">Tidah Bekerja</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="">Rata-rata Penghasilan tetap Perbulan</label>
                                      <select class="form-control" name="penghasilan_ayah" id="">
                                        <option @if(old('penghasilan_ayah') == '<1jt') selected @endif value="<1jt">< Rp 1000.000,-</option>
                                        <option @if(old('penghasilan_ayah') == '1jt-2jt') selected @endif value="1jt-2jt">Rp 1.000.000,- - Rp 2.0000.000,-</option>
                                        <option @if(old('penghasilan_ayah') == '2jt-3jt') selected @endif value="2jt-3jt">Rp 2.000.000,- - Rp 3.0000.000,-</option>
                                        <option @if(old('penghasilan_ayah') == '4jt-5jt') selected @endif value="4jt-5jt">Rp 4.000.000,- - Rp 5.0000.000,-</option>
                                        <option @if(old('penghasilan_ayah') == '>5jt') selected @endif value=">5jt"> > Rp 5.0000.000,-</option>
                                        <option @if(old('penghasilan_ayah') == '>10jt') selected @endif value=">10jt"> > Rp 10.0000.000,-</option>
                                      </select>
                                    </div>


                                </div> <!-- end left -->


                                <!-- right -->
                                <div class="col-md-12 col-lg-6 main-content">
                                    <div>
                                        <p><span class="w3-tag w3-xlarge" style="background-color:#28a745;padding-left:25px;">Identitas Ibu</span></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="namaIbu">Nama Lengkap *</label>
                                    <input name="nama_ibu_siswa" type="text" class="form-control" id="namaIbu" value="{{ old('nama_ibu_siswa') }}">
                                        @if($errors->has('nama_ibu_siswa'))
                                          <small class="text-danger">{{ $errors->first('nama_ibu_siswa') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="panggilanIbu">Nama Panggilan *</label>
                                        <input name="napang_ibu_siswa" type="text" class="form-control" id="panggilanIbu" value="{{ old('napang_ibu_siswa') }}">
                                        @if($errors->has('napang_ibu_siswa'))
                                          <small class="text-danger">{{ $errors->first('napang_ibu_siswa') }}</small>
                                        @endif
                                      </div>
                                    <div class="form-group">
                                        <label for="nikIbu">NIK *</label>
                                        <input name="nik_ibu_siswa" type="number" class="form-control" id="nikIbu" value="{{ old('nik_ibu_siswa') }}">
                                        @if($errors->has('nik_ibu_siswa'))
                                          <small class="text-danger">{{ $errors->first('nik_ibu_siswa') }}</small>
                                        @endif
                                      </div>
                                    <div class="form-group">
                                        <label for="tempatLahir">Tempat Lahir *</label>
                                        <input name="tempat_lahir_ibu" type="text" class="form-control" id="tempatLahir" value="{{ old('tempat_lahir_ibu') }}">
                                        @if($errors->has('tempat_lahir_ibu'))
                                          <small class="text-danger">{{ $errors->first('tempat_lahir_ibu') }}</small>
                                        @endif
                                      </div>
                                      <div class="row">
                                          <!-- tgl -->
                                          <div class="col-sm-3 col-xs-12">
                                              <div class="form-group">
                                                  <label for="">Tgl</label>
                                                  <input type="number" min="1" max="31"  class="form-control" name="tgl_ibu"  id="tgl" required onkeyup="capt()" value="{{ old('tgl_ibu')}}">
                                                  @if($errors->has('tgl_ibu'))
                                                    <small class="text-danger">{{ $errors->first('tgl_ibu') }}</small>
                                                  @endif
                                              </div>
                                          <!--/.form-group-->
                                          </div>
                                          <!--/.col-->
                                          <!-- bln -->
                                          <div class="col-sm-5 col-xs-12">
                                              <div class="form-group">
                                              <label for="">Bulan</label>
                                              <select class="form-control" name="bulan_ibu" id="" value="{{ old('bulan_ibu') }}">
                                                  <option @if(old('bulan_ibu') == 1) selected @endif value="1">Januari</option>
                                                  <option @if(old('bulan_ibu') == 2) selected @endif value="2">Februari</option>
                                                  <option @if(old('bulan_ibu') == 3) selected @endif value="3">Maret</option>
                                                  <option @if(old('bulan_ibu') == 4) selected @endif value="4">April</option>
                                                  <option @if(old('bulan_ibu') == 5) selected @endif value="5">Mei</option>
                                                  <option @if(old('bulan_ibu') == 6) selected @endif value="6">Juni</option>
                                                  <option @if(old('bulan_ibu') == 7) selected @endif value="7">Juli</option>
                                                  <option @if(old('bulan_ibu') == 8) selected @endif value="8">Agustus</option>
                                                  <option @if(old('bulan_ibu') == 9) selected @endif value="9">September</option>
                                                  <option @if(old('bulan_ibu') == 10) selected @endif value="10">Oktober</option>
                                                  <option @if(old('bulan_ibu') == 11) selected @endif value="11">November</option>
                                                  <option @if(old('bulan_ibu') == 12) selected @endif value="12">Desember</option>
                                              </select>
                                              </div>
                                          </div>
                                          <!--/.col-->
                                          <!-- thn -->
                                          <div class="col-sm-4 col-xs-12">
                                              <div class="form-group">
                                                  <label for="">Tahun</label>
                                                  <input name="tahun_ibu"  type="number" min="1990" max="2018" class="form-control medqInput" id="tahun"  required onkeyup="capt()" value="{{ old('tahun_ibu') }}">
                                                  @if($errors->has('tahun_ibu'))
                                                    <small class="text-danger">{{ $errors->first('tahun_ibu') }}</small>
                                                  @endif
                                                </div>
                                          </div>
                                      </div>
                                    <div class="form-group">
                                      <label for="">Hubungan Ibu dengan Santri</label>
                                      <select class="form-control" name="hbgn_ibu_santri">
                                        <option @if(old('hbgn_ibu_santri') == 'kandung') selected @endif value="kandung">Ibu Kandung</option>
                                        <option @if(old('hbgn_ibu_santri') == 'tiri') selected @endif value="tiri">Ibu Tiri</option>
                                        <option @if(old('hbgn_ibu_santri') == 'angkat') selected @endif value="angkat">Ibu Angkat</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="">Status Ibu</label>
                                      <select class="form-control" name="status_ibu_santri" id="">
                                        <option @if(old('status_ibu_santri') == 'hidup') selected @endif value="hidup">Hidup</option>
                                        <option @if(old('status_ibu_santri') == 'meninggal') selected @endif value="meninggal">Meninggal</option>
                                        <option @if(old('status_ibu_santri') == 'hilang') selected @endif value="hilang">Hilang</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat *</label>
                                        <input name="alamat_ibu" type="text" class="form-control" id="alamat" value="{{ old('alamat_ibu') }}">
                                        @if($errors->has('alamat_ibu'))
                                          <small class="text-danger">{{ $errors->first('alamat_ibu') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="kabkota">Kota/Kabupaten *</label>
                                        <input name="kabkota_ibu" type="text" class="form-control" id="kabkota" value="{{ old('kabkota_ibu') }}">
                                        @if($errors->has('kabkota_ibu'))
                                          <small class="text-danger">{{ $errors->first('kabkota_ibu') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="prov">Provinsi *</label>
                                        <input name="provinsi_ibu" type="text" class="form-control" id="prov" value="{{ old('provinsi_ibu') }}">
                                        @if($errors->has('provinsi_ibu'))
                                          <small class="text-danger">{{ $errors->first('provinsi_ibu') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="prov">Kode Pos *</label>
                                        <input name="kodepos_ibu" type="text" class="form-control" id="prov" value="{{ old('provinsi_ibu') }}">
                                        @if($errors->has('kodepos_ibu'))
                                          <small class="text-danger">{{ $errors->first('kodepos_ibu') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="telp">Telp *</label>
                                        <input name="telepon_ibu" type="number" class="form-control" id="telp">
                                        @if($errors->has('telepon_ibu'))
                                          <small class="text-danger">{{ $errors->first('telepon_ibu') }}</small>
                                        @endif
                                      </div>
                                      <div class="form-group">
                                          <label for="">Pendidikan</label>
                                          <select class="form-control" name="pendidikan_terakhir_ibu" id="" value="{{ old('pendidikan_terakhir_ibu') }}">
                                            <option @if(old('pendidikan_terakhir_ibu') == 'SD') selected @endif value="SD">SD</option>
                                            <option @if(old('pendidikan_terakhir_ibu') == 'SMP') selected @endif value="SMP">SMP</option>
                                            <option @if(old('pendidikan_terakhir_ibu') == 'SMA') selected @endif value="SMA">SMA</option>
                                            <option @if(old('pendidikan_terakhir_ibu') == 'D1') selected @endif value="D1">D1</option>
                                            <option @if(old('pendidikan_terakhir_ibu') == 'D2') selected @endif value="D3">D3</option>
                                            <option @if(old('pendidikan_terakhir_ibu') == 'D4') selected @endif value="D4">D4</option>
                                            <option @if(old('pendidikan_terakhir_ibu') == 'S1') selected @endif value="S1">S1</option>
                                            <option @if(old('pendidikan_terakhir_ibu') == 'S2') selected @endif value="S2">S2</option>
                                            <option @if(old('pendidikan_terakhir_ibu') == 'S3') selected @endif value="S3">S3</option>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Pekerjaan</label>
                                            <select class="form-control" name="pekerjaan_ibu" id="">
                                              <option @if(old('pekerjaan_ibu') == 'Swasta') selected @endif value="Swasta">Swasta</option>
                                              <option @if(old('pekerjaan_ibu') == 'PNS') selected @endif value="PNS">PNS</option>
                                              <option @if(old('pekerjaan_ibu') == 'Wiraswasta') selected @endif value="Wiraswasta">Wiraswasta</option>
                                              <option @if(old('pekerjaan_ibu') == 'Petani') selected @endif value="Petani">Petani</option>
                                              <option @if(old('pekerjaan_ibu') == 'Buruh') selected @endif value="Buruh">Buruh</option>
                                            </select>
                                          </div>
                                          <div class="form-group">
                                              <label for="">Rata-rata Penghasilan tetap Perbulan</label>
                                              <select class="form-control" name="penghasilan_ibu" id="">
                                                <option @if(old('penghasilan_ibu') == '<1jt') selected @endif value="<1jt">< Rp 1000.000,-</option>
                                                <option @if(old('penghasilan_ibu') == '1jt-2jt') selected @endif value="1jt-2jt">Rp 1.000.000,- - Rp 2.0000.000,-</option>
                                                <option @if(old('penghasilan_ibu') == '2jt-3jt') selected @endif value="2jt-3jt">Rp 2.000.000,- - Rp 3.0000.000,-</option>
                                                <option @if(old('penghasilan_ibu') == '4jt-5jt') selected @endif value="4jt-5jt">Rp 4.000.000,- - Rp 5.0000.000,-</option>
                                                <option @if(old('penghasilan_ibu') == '>5jt') selected @endif value=">5jt"> > Rp 5.0000.000,-</option>
                                                <option @if(old('penghasilan_ibu') == '>10jt') selected @endif value=">10jt"> > Rp 10.0000.000,-</option>
                                              </select>
                                            </div>
                                </div> <!-- end right -->
                            </div> <!-- end row -->
                        </div> <!-- identitas ortu end-->
                        <br>
                        <!-- identitas wali santri -->
                        <div>
                            <!-- left -->
                                                           <!-- left -->
                                                           <div class="col-md-12 col-lg-6 main-content">
                                                              <div>
                                                                  <p><span class="w3-tag w3-xlarge" style="background-color:#28a745;padding-left:25px;">Identitas Wali</span></p>
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="namaAyah">Nama Lengkap *</label>
                                                              <input name="nama_wali_siswa" type="text" class="form-control" id="namawali" value="{{ old('nama_wali_siswa') }}">
                                                                  @if($errors->has('nama_wali_siswa'))
                                                                    <small class="text-danger">{{ $errors->first('nama_wali_siswa') }}</small>
                                                                  @endif
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="panggilanwali">Nama Panggilan *</label>
                                                                  <input name="napang_wali_siswa" type="text" class="form-control" id="panggilanwali" value="{{ old('napang_wali_siswa') }}">
                                                                  @if($errors->has('napang_wali_siswa'))
                                                                    <small class="text-danger">{{ $errors->first('napang_wali_siswa') }}</small>
                                                                  @endif
                                                            </div>
                                                              <div class="form-group">
                                                                  <label for="nikwali">NIK *</label>
                                                              <input name="nik_wali_siswa" type="number" class="form-control" id="nikwali" value="{{ old('nik_wali_siswa') }}">
                                                              @if($errors->has('nik_wali_siswa'))
                                                                <small class="text-danger">{{ $errors->first('nik_wali_siswa') }}</small>
                                                              @endif
                                                            </div>
                                                              <div class="form-group">
                                                                  <label for="tempatLahir">Tempat Lahir *</label>
                                                              <input name="tempat_lahir_wali" type="text" class="form-control" id="tempat_lahir_wali" value="{{ old('tempat_lahir_wali') }}">
                                                              @if($errors->has('tempat_lahir_wali'))
                                                                  <small class="text-danger">{{ $errors->first('tempat_lahir_wali') }}</small>
                                                              @endif
                                                            </div>
                                                              <div class="row">
                                                                  <!-- tgl -->
                                                                  <div class="col-sm-3 col-xs-12">
                                                                      <div class="form-group">
                                                                          <label for="">Tgl</label>
                                                                          <input type="number" min="1" max="31"  class="form-control" name="tgl_wali"  id="tgl" required onkeyup="capt()" value="{{ old('tgl_wali')}}">
                                                                          @if($errors->has('tgl_wali'))
                                                                            <small class="text-danger">{{ $errors->first('tgl_wali') }}</small>
                                                                          @endif
                                                                      </div>
                                                                  <!--/.form-group-->
                                                                  </div>
                                                                  <!--/.col-->
                                                                  <!-- bln -->
                                                                  <div class="col-sm-5 col-xs-12">
                                                                      <div class="form-group">
                                                                      <label for="">Bulan</label>
                                                                      <select class="form-control" name="bulan_wali" id="" value="{{ old('bulan_wali') }}">
                                                                          <option @if(old('bulan_wali') == 1) selected @endif value="1">Januari</option>
                                                                          <option @if(old('bulan_wali') == 2) selected @endif value="2">Februari</option>
                                                                          <option @if(old('bulan_wali') == 3) selected @endif value="3">Maret</option>
                                                                          <option @if(old('bulan_wali') == 4) selected @endif value="4">April</option>
                                                                          <option @if(old('bulan_wali') == 5) selected @endif value="5">Mei</option>
                                                                          <option @if(old('bulan_wali') == 6) selected @endif value="6">Juni</option>
                                                                          <option @if(old('bulan_wali') == 7) selected @endif value="7">Juli</option>
                                                                          <option @if(old('bulan_wali') == 8) selected @endif value="8">Agustus</option>
                                                                          <option @if(old('bulan_wali') == 9) selected @endif value="9">September</option>
                                                                          <option @if(old('bulan_wali') == 10) selected @endif value="10">Oktober</option>
                                                                          <option @if(old('bulan_wali') == 11) selected @endif value="11">November</option>
                                                                          <option @if(old('bulan_wali') == 12) selected @endif value="12">Desember</option>
                                                                      </select>
                                                                      </div>
                                                                  </div>
                                                                  <!--/.col-->
                                                                  <!-- thn -->
                                                                  <div class="col-sm-4 col-xs-12">
                                                                      <div class="form-group">
                                                                          <label for="">Tahun</label>
                                                                          <input name="tahun_wali"  type="number" min="1990" max="2018" class="form-control medqInput" id="tahun"  required onkeyup="capt()" value="{{ old('tahun_wali') }}">
                                                                          @if($errors->has('tahun_wali'))
                                                                            <small class="text-danger">{{ $errors->first('tahun_wali') }}</small>
                                                                          @endif
                                                                        </div>
                                                                  </div>
                                                              </div>
                                                              <div class="form-group">
                                                                <label>Hubungan wali dengan Santri</label>
                                                                <select class="form-control" name="hbgn_wali_santri">
                                                                  <option @if(old('hbgn_wali_santri') == 'kandung') selected @endif value="kandung">wali Kandung</option>
                                                                  <option @if(old('hbgn_wali_santri') == 'tiri') selected @endif value="tiri">wali Tiri</option>
                                                                  <option @if(old('hbgn_wali_santri') == 'angkat') selected @endif value="angkat">wali Angkat</option>
                                                                </select>
                                                              </div>
                                                              <div class="form-group">
                                                                <label>Status wali</label>
                                                                <select class="form-control" name="status_wali_santri">
                                                                  <option @if(old('status_wali_santri') == 'hidup') selected @endif value="hidup">Hidup</option>
                                                                  <option @if(old('status_wali_santri') == 'meninggal') selected @endif value="meninggal">Meninggal</option>
                                                                  <option @if(old('status_wali_santri') == 'hilang') selected @endif value="hilang">Hilang</option>
                                                                </select>
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="alamat">Alamat *</label>
                                                                  <input name="alamat_wali" type="text" class="form-control" id="alamat" value="{{ old('alamat_wali') }}">
                                                                  @if($errors->has('alamat_wali'))
                                                                    <small class="text-danger">{{ $errors->first('alamat_wali') }}</small>
                                                                  @endif
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="kabkota">Kota/Kabupaten *</label>
                                                                  <input name="kabkota_wali" type="text" class="form-control" id="kabkota" value="{{ old('kabkota_wali') }}">
                                                                  @if($errors->has('kabkota_wali'))
                                                                    <small class="text-danger">{{ $errors->first('kabkota_wali') }}</small>
                                                                  @endif
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="prov">Provinsi *</label>
                                                                  <input name="provinsi_wali" type="text" class="form-control" id="prov" value="{{ old('provinsi_wali') }}">
                                                                  @if($errors->has('provinsi_wali'))
                                                                    <small class="text-danger">{{ $errors->first('provinsi_wali') }}</small>
                                                                  @endif
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="kodepos">Kode Pos *</label>
                                                                  <input name="kodepos_wali" type="number" class="form-control" id="kodepos" value="{{ old('kodepos_wali') }}">
                                                                  @if($errors->has('kodepos_wali'))
                                                                    <small class="text-danger">{{ $errors->first('kodepos_wali') }}</small>
                                                                  @endif
                                                                </div>
                                                              <div class="form-group">
                                                                  <label for="telp">Telp *</label>
                                                                  <input name="telepon_wali" type="number" class="form-control" id="telp">
                                                                  @if($errors->has('telepon_wali'))
                                                                    <small class="text-danger">{{ $errors->first('telepon_wali') }}</small>
                                                                  @endif
                                                                </div>
                                                              <div class="form-group">
                                                                <label for="">Pendidikan</label>
                                                                <select class="form-control" name="pendidikan_terakhir_wali" id="" value="{{ old('pendidikan_terakhir_wali') }}">
                                                                  <option @if(old('pendidikan_terakhir_wali') == 'SD') selected @endif value="SD">SD</option>
                                                                  <option @if(old('pendidikan_terakhir_wali') == 'SMP') selected @endif value="SMP">SMP</option>
                                                                  <option @if(old('pendidikan_terakhir_wali') == 'SMA') selected @endif value="SMA">SMA</option>
                                                                  <option @if(old('pendidikan_terakhir_wali') == 'D1') selected @endif value="D1">D1</option>
                                                                  <option @if(old('pendidikan_terakhir_wali') == 'D2') selected @endif value="D3">D3</option>
                                                                  <option @if(old('pendidikan_terakhir_wali') == 'D4') selected @endif value="D4">D4</option>
                                                                  <option @if(old('pendidikan_terakhir_wali') == 'S1') selected @endif value="S1">S1</option>
                                                                  <option @if(old('pendidikan_terakhir_wali') == 'S2') selected @endif value="S2">S2</option>
                                                                  <option @if(old('pendidikan_terakhir_wali') == 'S3') selected @endif value="S3">S3</option>
                                                                </select>
                                                              </div>
                                                              <div class="form-group">
                                                                <label for="">Pekerjaan</label>
                                                                <select class="form-control" name="pekerjaan_wali" id="">
                                                                  <option @if(old('pekerjaan_wali') == 'Swasta') selected @endif value="Swasta">Swasta</option>
                                                                  <option @if(old('pekerjaan_wali') == 'PNS') selected @endif value="PNS">PNS</option>
                                                                  <option @if(old('pekerjaan_wali') == 'Wiraswasta') selected @endif value="Wiraswasta">Wiraswasta</option>
                                                                  <option @if(old('pekerjaan_wali') == 'Petani') selected @endif value="Petani">Petani</option>
                                                                  <option @if(old('pekerjaan_wali') == 'Buruh') selected @endif value="Buruh">Buruh</option>
                                                                </select>
                                                              </div>
                                                              <div class="form-group">
                                                                <label for="">Rata-rata Penghasilan tetap Perbulan</label>
                                                                <select class="form-control" name="penghasilan_wali" id="">
                                                                  <option @if(old('penghasilan_wali') == '<1jt') selected @endif value="<1jt">< Rp 1000.000,-</option>
                                                                  <option @if(old('penghasilan_wali') == '1jt-2jt') selected @endif value="1jt-2jt">Rp 1.000.000,- - Rp 2.0000.000,-</option>
                                                                  <option @if(old('penghasilan_wali') == '2jt-3jt') selected @endif value="2jt-3jt">Rp 2.000.000,- - Rp 3.0000.000,-</option>
                                                                  <option @if(old('penghasilan_wali') == '4jt-5jt') selected @endif value="4jt-5jt">Rp 4.000.000,- - Rp 5.0000.000,-</option>
                                                                  <option @if(old('penghasilan_wali') == '>5jt') selected @endif value=">5jt"> > Rp 5.0000.000,-</option>
                                                                  <option @if(old('penghasilan_wali') == '>10jt') selected @endif value=">10jt"> > Rp 10.0000.000,-</option>
                                                                </select>
                                                              </div>


                                                          </div> <!-- end left -->

                        <!-- identitas ortu santri -->
                        <div>
                            <div>
                                <p><span class="w3-tag w3-xlarge" style="background-color:#28a745; padding-left:50px;">Berkas-berkas</span></p>
                            </div>

                            <!-- foto -->
                            <div class="row">
                                <!-- foto -->
                                <div class="col-md-12 col-lg-12 main-content">
                                    <div>
                                        <p><span class="w3-tag w3-xlarge" style="background-color:#28a745;padding-left:25px;">Foto</span></p>
                                    </div>


                                    <div class="row">
                                        <!-- foto santri -->
                                        <div class="col-sm-3 col-xs-12">
                                            <div class="form-group">
                                                <label for="">Foto Santri</label>
                                                <div class="container2">
                                                    <!-- <label class="labell" for="input">Please upload a picture !</label> -->
                                                    <img id="santri" src="#" alt="your image" style="width:150px; height:200px; background-color:#eeeeee" />

                                                    <div class="input">
                                                        <!-- <input name="input" id="file2" type="file"> -->
                                                        <!-- <input type='file' onchange="readURL(this);" /> -->
                                                        <div class="upload-btn-wrapper">
                                                            <button class="btn1">Upload a file</button>
                                                            <input type="file" name="foto_santri" onchange="readURL(this);" />
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <!-- foto wali santri -->
                                        <div class="col-sm-3 col-xs-12">
                                            <div class="form-group">
                                                <label for="">Foto Wali Santri</label>
                                                <div class="container2">
                                                    <!-- <label class="labell" for="input">Please upload a picture !</label> -->
                                                    <img id="wali" src="#" alt="your image" style="width:150px; height:200px; background-color:#eeeeee" />

                                                    <div class="input">
                                                        <!-- <input name="input" id="file2" type="file"> -->
                                                        <!-- <input type='file' onchange="readURL2(this);" /> -->
                                                        <div class="upload-btn-wrapper">
                                                            <button class="btn1">Upload a file</button>
                                                            <input type="file" name="foto_wali_santri" onchange="readURL2(this);" />
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <!-- foto ayah santri -->
                                        <div class="col-sm-3 col-xs-12">
                                            <div class="form-group">
                                                <label for="">Foto Ayah Santri</label>
                                                <div class="container2">
                                                    <!-- <label class="labell" for="input">Please upload a picture !</label> -->
                                                    <img id="ayah" src="#" alt="your image" style="width:150px; height:200px; background-color:#eeeeee" />

                                                    <div class="input">
                                                        <!-- <input name="input" id="file2" type="file"> -->
                                                        <!-- <input type='file' onchange="readURL3(this);" /> -->
                                                        <div class="upload-btn-wrapper">
                                                            <button class="btn1">Upload a file</button>
                                                            <input type="file" name="foto_ayah_santri" onchange="readURL3(this);" />
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <!-- foto ibu santri -->
                                        <div class="col-sm-3 col-xs-12">
                                            <div class="form-group">
                                                <label for="">Foto Ibu Santri</label>
                                                <div class="container2">
                                                    <!-- <label class="labell" for="input">Please upload a picture !</label> -->
                                                    <img id="ibu" src="#" alt="your image" style="width:150px; height:200px; background-color:#eeeeee" />

                                                    <div class="input">
                                                        <!-- <input name="input" id="file2" type="file"> -->
                                                        <!-- <input type='file' onchange="readURL4(this);" /> -->
                                                        <div class="upload-btn-wrapper">
                                                            <button class="btn1">Upload a file</button>
                                                            <input type="file" name="foto_ibu_santri" onchange="readURL4(this);" />
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                </div> <!-- end foto -->



                            </div> <!-- end row -->


                            <!-- berkas -->
                            <div class="row">
                                <!-- foto -->
                                <div class="col-md-12 col-lg-12 main-content">
                                    <div>
                                        <p><span class="w3-tag w3-xlarge" style="background-color:#28a745;padding-left:25px;">Dokumen</span></p>
                                    </div>


                                    <div class="table-responsive">
                                        <table class="table table-hover">

                                            <tbody>
                                                <tr>
                                                    <th>Akte</th>
                                                    <td>
                                                        <input type="file" name="akta_santri" id="blah">
                                                    </td>
                                                    <td>
                                                        <button type="button" id="btn-reset-akte" class="btn btn-large btn-block btn-danger">Reset</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>KK</th>
                                                    <td>
                                                        <input type="file" name="kk_santri" id="blah2">
                                                    </td>
                                                    <td>
                                                        <button type="button" id="btn-reset-kk" class="btn btn-large btn-block btn-danger">Reset</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>BPJS</th>
                                                    <td>
                                                        <input type="file" name="bpjs_santri" id="blah3">
                                                    </td>
                                                    <td>
                                                        <button type="button" id="btn-reset-bpjs" class="btn btn-large btn-block btn-danger">Reset</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>KTP</th>
                                                    <td>
                                                        <input type="file" name="ktp_santri" id="blah4">
                                                    </td>
                                                    <td>
                                                        <button type="button" id="btn-reset-ktp" class="btn btn-large btn-block btn-danger">Reset</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>KTP Wali</th>
                                                    <td>
                                                        <input type="file" name="ktp_wali" id="blah5">
                                                    </td>
                                                    <td>
                                                        <button type="button" id="btn-reset-ktpwali" class="btn btn-large btn-block btn-danger">Reset</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>KTP Ayah</th>
                                                    <td>
                                                        <input type="file" name="ktp_ayah" id="blah6">
                                                    </td>
                                                    <td>
                                                        <button type="button" id="btn-reset-ktpayah" class="btn btn-large btn-block btn-danger">Reset</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>KTP Ibu</th>
                                                    <td>
                                                        <input type="file" name="ktp_ibu" id="blah7">
                                                    </td>
                                                    <td>
                                                        <button type="button" id="btn-reset-ktpibu" class="btn btn-large btn-block btn-danger">Reset</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Ijazah</th>
                                                    <td>
                                                        <input type="file" name="ijazah_santri" id="blah8">
                                                    </td>
                                                    <td>
                                                        <button type="button" id="btn-reset-ijazah" class="btn btn-large btn-block btn-danger">Reset</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>SKHUN</th>
                                                    <td>
                                                        <input type="file" name="skhun_santri" id="blah9">
                                                    </td>
                                                    <td>
                                                        <button type="button" id="btn-reset-skhun" class="btn btn-large btn-block btn-danger">Reset</button>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>



                                </div> <!-- end foto -->



                            </div> <!-- end row -->
                        </div> <!-- identitas ortu end-->
                        <br>
                        <!-- btn submit -->
                        <div class="form-group">
                          <center>
                            <div class="g-recaptcha" data-sitekey="6LesgYoUAAAAAFbqCI_A39QgBUO0CcfErCFo2TQ2"></div>
                          </center>
                          <br>
                            <input type="submit" style="margin:0 auto; display:block;" value="DAFTAR" class="btn btn-info btn-lg">
                        </div>

                    </form>
                </div>
            </div>
          </div>
          <!-- END main-content -->
        </div>
      </div>
    </section>
</div>
@endsection
