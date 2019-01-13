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
                    <form action="#" class="p-5 bg-light">
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
                                        <input type="text" class="form-control" id="tingkatPendidikan" value="Madrasah Diniyah" disabled>
                                    </div>
                                    <div class="form-group">
                                    <label for="">Jenis Siswa</label>
                                    <select class="form-control" name="" id="">
                                        <option>Lama</option>
                                        <option>Baru</option>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="noinduk">No Induk *</label>
                                        <input type="number" class="form-control" id="noinduk">
                                    </div>
                                    <div class="form-group">
                                        <label for="nisn">NISN *</label>
                                        <input type="number" class="form-control" id="nisn">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap *</label>
                                        <input type="text" class="form-control" id="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="namaPanggilan">Nama Panggilan *</label>
                                        <input type="text" class="form-control" id="namaPanggilan">
                                    </div>
                                    <div class="form-group">
                                        <label for="nik">NIK *</label>
                                        <input type="number" class="form-control" id="nik">
                                    </div>
                                    <div class="form-group">
                                        <label for="kk">No KK *</label>
                                        <input type="number" class="form-control" id="kk">
                                    </div>
                                    <div class="form-group">
                                        <label for="tempatLahir">Tempat Lahir *</label>
                                        <input type="text" class="form-control" id="tempatLahir">
                                    </div>
                                    <div class="row">
                                        <!-- tgl -->
                                        <div class="col-sm-3 col-xs-12">
                                            <div class="form-group">
                                                <label for="">Tgl</label>
                                                <input type="number" min="1" max="31"  class="form-control" name="tgl"  id="tgl" required onkeyup="capt()">
                                                
                                                @if($errors->has('tempat_lahir'))
                                                <small class="text-danger">{{ $errors->first('tempat_lahir') }}</small>
                                                @endif
                                            </div>
                                        <!--/.form-group-->
                                        </div>
                                        <!--/.col-->
                                        <!-- bln -->
                                        <div class="col-sm-5 col-xs-12">
                                            <div class="form-group">
                                            <label for="">Bulan</label>
                                            <select class="form-control" name="bulan" id="">
                                                <option value="1">Januari</option>
                                                <option value="2">Februari</option>
                                                <option value="3">Maret</option>
                                                <option value="4">April</option>
                                                <option value="5">Mei</option>
                                                <option value="6">Juni</option>
                                                <option value="7">Juli</option>
                                                <option value="8">Agustus</option>
                                                <option value="9">September</option>
                                                <option value="10">Oktober</option>
                                                <option value="11">November</option>
                                                <option value="12">Desember</option>
                                            </select>
                                            </div>
                                        </div>
                                        <!--/.col-->
                                        <!-- thn -->
                                        <div class="col-sm-4 col-xs-12">
                                            <div class="form-group">
                                                <label for="">Tahun</label>
                                                <input type="number" min="1990" max="2018" class="form-control medqInput" name="tahun" id="tahun"  required onkeyup="capt()">
                                                @if($errors->has('tgl_lahir'))
                                                <small class="text-danger">{{ $errors->first('tgl_lahir') }}</small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                
                                </div>

                                <!-- right -->
                                <div class="col-md-12 col-lg-6 main-content">
                                    
                                    <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <select class="form-control" name="" id="">
                                        <option>Laki-Laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                    <label for="">Status dalam Keluarga</label>
                                    <select class="form-control" name="" id="">
                                        <option>A</option>
                                        <option>B</option>
                                        <option></option>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="anakke">Anak ke *</label>
                                        <input type="number" class="form-control" id="anakke">
                                    </div>
                                    <div class="form-group">
                                        <label for="jmlsaudara">Jumlah Saudara *</label>
                                        <input type="number" class="form-control" id="jmlsaudara">
                                    </div>
                                    <div class="form-group">
                                        <label for="kip">No KIP *</label>
                                        <input type="number" class="form-control" id="kip">
                                    </div>
                                    <div class="form-group">
                                        <label for="bpjs">No BPJS *</label>
                                        <input type="number" class="form-control" id="bpjs">
                                    </div>
                                    <div class="form-group">
                                        <label for="jamkes">No Jamkes *</label>
                                        <input type="number" class="form-control" id="jamkes">
                                    </div>
                                    <div class="form-group">
                                    <label for="hobi">Hobi</label>
                                    <select class="form-control" name="hobi" id="hobi">
                                        <option>Berenang</option>
                                        <option>Membaca</option>
                                        <option></option>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                    <label for="citacita">Cita-cita</label>
                                    <select class="form-control" name="citacita" id="citacita">
                                        <option>Berenang</option>
                                        <option>Membaca</option>
                                        <option></option>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                    <label for="kebKhusus">Berkebutuhan Khusus</label>
                                    <select class="form-control" name="kebKhusus" id="kebKhusus">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
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
                                        <input type="text" class="form-control" id="sekolah">
                                    </div>
                                    <div class="form-group">
                                        <label for="jenisSekolah">Jenis Sekolah</label>
                                        <select class="form-control" name="jenisSekolah" id="jenisSekolah">
                                            <option>A</option>
                                            <option>B</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="statusSekolah">Status Sekolah</label>
                                        <select class="form-control" name="statusSekolah" id="statusSekolah">
                                            <option>A</option>
                                            <option>B</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat Sekolah *</label>
                                        <input type="text" class="form-control" id="alamat">
                                    </div>
                                    <div class="form-group">
                                        <label for="kabkota">Kota/Kabupaten *</label>
                                        <input type="text" class="form-control" id="kabkota">
                                    </div>
                                    <div class="form-group">
                                        <label for="prov">Provinsi *</label>
                                        <input type="text" class="form-control" id="prov">
                                    </div>
                                    
                                
                                </div> <!-- end left --> 
                                

                                <!-- right -->
                                <div class="col-md-12 col-lg-6 main-content">
                            
                                    <div class="form-group">
                                        <label for="nss">NSS/NSM *</label>
                                        <input type="number" class="form-control" id="nss">
                                    </div>
                                    <div class="form-group">
                                        <label for="npsn">NPSN *</label>
                                        <input type="number" class="form-control" id="npsn">
                                    </div>
                                    <div class="form-group">
                                        <label for="ijazah">No Seri Ijazah *</label>
                                        <input type="text" class="form-control" id="noijazah">
                                    </div>
                                    <div class="form-group">
                                        <label for="skhun">No Seri SKHUN *</label>
                                        <input type="text" class="form-control" id="skhun">
                                    </div>
                                    <div class="form-group">
                                        <label for="noUn">No Peserta Ujian UN *</label>
                                        <input type="text" class="form-control" id="noUn">
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
                                        <input type="text" class="form-control" id="namaAyah">
                                    </div>
                                    <div class="form-group">
                                        <label for="panggilanAyah">Nama Panggilan *</label>
                                        <input type="text" class="form-control" id="panggilanAyah">
                                    </div>
                                    <div class="form-group">
                                        <label for="nikAyah">NIK *</label>
                                        <input type="number" class="form-control" id="nikAyah">
                                    </div>
                                    <div class="form-group">
                                        <label for="tempatLahir">Tempat Lahir *</label>
                                        <input type="text" class="form-control" id="tempatLahir">
                                    </div>
                                    <div class="row">
                                        <!-- tgl -->
                                        <div class="col-sm-3 col-xs-12">
                                            <div class="form-group">
                                                <label for="">Tgl</label>
                                                <input type="number" min="1" max="31"  class="form-control" name="tgl"  id="tgl" required onkeyup="capt()">
                                                
                                                @if($errors->has('tempat_lahir'))
                                                <small class="text-danger">{{ $errors->first('tempat_lahir') }}</small>
                                                @endif
                                            </div>
                                        <!--/.form-group-->
                                        </div>
                                        <!--/.col-->
                                        <!-- bln -->
                                        <div class="col-sm-5 col-xs-12">
                                            <div class="form-group">
                                            <label for="">Bulan</label>
                                            <select class="form-control" name="bulan" id="">
                                                <option value="1">Januari</option>
                                                <option value="2">Februari</option>
                                                <option value="3">Maret</option>
                                                <option value="4">April</option>
                                                <option value="5">Mei</option>
                                                <option value="6">Juni</option>
                                                <option value="7">Juli</option>
                                                <option value="8">Agustus</option>
                                                <option value="9">September</option>
                                                <option value="10">Oktober</option>
                                                <option value="11">November</option>
                                                <option value="12">Desember</option>
                                            </select>
                                            </div>
                                        </div>
                                        <!--/.col-->
                                        <!-- thn -->
                                        <div class="col-sm-4 col-xs-12">
                                            <div class="form-group">
                                                <label for="">Tahun</label>
                                                <input type="number" min="1990" max="2018" class="form-control medqInput" name="tahun" id="tahun"  required onkeyup="capt()">
                                                @if($errors->has('tgl_lahir'))
                                                <small class="text-danger">{{ $errors->first('tgl_lahir') }}</small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="">Hubungan Ayah dengan Santri</label>
                                      <select class="form-control" name="" id="">
                                        <option value="kandung">Ayah Kandung</option>
                                        <option value="tiri">Ayah Tiri</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="">Status Ayah</label>
                                      <select class="form-control" name="" id="">
                                        <option>A</option>
                                        <option>B</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat *</label>
                                        <input type="text" class="form-control" id="alamat">
                                    </div>
                                    <div class="form-group">
                                        <label for="kabkota">Kota/Kabupaten *</label>
                                        <input type="text" class="form-control" id="kabkota">
                                    </div>
                                    <div class="form-group">
                                        <label for="prov">Provinsi *</label>
                                        <input type="text" class="form-control" id="prov">
                                    </div>
                                    <div class="form-group">
                                        <label for="kodepos">Kode Pos *</label>
                                        <input type="number" class="form-control" id="kodepos">
                                    </div>
                                    <div class="form-group">
                                        <label for="telp">Telp *</label>
                                        <input type="number" class="form-control" id="telp">
                                    </div>
                                    <div class="form-group">
                                      <label for="">Pendidikan</label>
                                      <select class="form-control" name="" id="">
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA</option>
                                        <option value="D1">D1</option>
                                        <option value="D3">D3</option>
                                        <option value="D4">D4</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="">Pekerjaan</label>
                                      <select class="form-control" name="" id="">
                                        <option value="Swasta">Swasta</option>
                                        <option value="PNS">PNS</option>
                                        <option value="Wiraswasta">Wiraswasta</option>
                                        <option value="Petani">Petani</option>
                                        <option value="Buruh">Buruh</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="">Rata-rata Penghasilan tetap Perbulan</label>
                                      <select class="form-control" name="" id="">
                                        <option value="<1jt">< Rp 1000.000,-</option>
                                        <option value="1jt-2jt">Rp 1.000.000,- - Rp 2.0000.000,-</option>
                                        <option value="2jt-3jt">Rp 2.000.000,- - Rp 3.0000.000,-</option>
                                        <option value="4jt-5jt">Rp 4.000.000,- - Rp 5.0000.000,-</option>
                                        <option value=">5jt"> > Rp 5.0000.000,-</option>
                                        <option value=">10jt"> > Rp 10.0000.000,-</option>
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
                                        <input type="text" class="form-control" id="namaIbu">
                                    </div>
                                    <div class="form-group">
                                        <label for="panggilanIbu">Nama Panggilan *</label>
                                        <input type="text" class="form-control" id="panggilanIbu">
                                    </div>
                                    <div class="form-group">
                                        <label for="nikIbu">NIK *</label>
                                        <input type="number" class="form-control" id="nikIbu">
                                    </div>
                                    <div class="form-group">
                                        <label for="tempatLahir">Tempat Lahir *</label>
                                        <input type="text" class="form-control" id="tempatLahir">
                                    </div>
                                    <div class="row">
                                        <!-- tgl -->
                                        <div class="col-sm-3 col-xs-12">
                                            <div class="form-group">
                                                <label for="">Tgl</label>
                                                <input type="number" min="1" max="31"  class="form-control" name="tgl"  id="tgl" required onkeyup="capt()">
                                                
                                                @if($errors->has('tempat_lahir'))
                                                <small class="text-danger">{{ $errors->first('tempat_lahir') }}</small>
                                                @endif
                                            </div>
                                        <!--/.form-group-->
                                        </div>
                                        <!--/.col-->
                                        <!-- bln -->
                                        <div class="col-sm-5 col-xs-12">
                                            <div class="form-group">
                                            <label for="">Bulan</label>
                                            <select class="form-control" name="bulan" id="">
                                                <option value="1">Januari</option>
                                                <option value="2">Februari</option>
                                                <option value="3">Maret</option>
                                                <option value="4">April</option>
                                                <option value="5">Mei</option>
                                                <option value="6">Juni</option>
                                                <option value="7">Juli</option>
                                                <option value="8">Agustus</option>
                                                <option value="9">September</option>
                                                <option value="10">Oktober</option>
                                                <option value="11">November</option>
                                                <option value="12">Desember</option>
                                            </select>
                                            </div>
                                        </div>
                                        <!--/.col-->
                                        <!-- thn -->
                                        <div class="col-sm-4 col-xs-12">
                                            <div class="form-group">
                                                <label for="">Tahun</label>
                                                <input type="number" min="1990" max="2018" class="form-control medqInput" name="tahun" id="tahun"  required onkeyup="capt()">
                                                @if($errors->has('tgl_lahir'))
                                                <small class="text-danger">{{ $errors->first('tgl_lahir') }}</small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="">Hubungan Ibu dengan Santri</label>
                                      <select class="form-control" name="" id="">
                                        <option value="kandung">Ibu Kandung</option>
                                        <option value="tiri">Ibu Tiri</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="">Status Ibu</label>
                                      <select class="form-control" name="" id="">
                                        <option>A</option>
                                        <option>B</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat *</label>
                                        <input type="text" class="form-control" id="alamat">
                                    </div>
                                    <div class="form-group">
                                        <label for="kabkota">Kota/Kabupaten *</label>
                                        <input type="text" class="form-control" id="kabkota">
                                    </div>
                                    <div class="form-group">
                                        <label for="prov">Provinsi *</label>
                                        <input type="text" class="form-control" id="prov">
                                    </div>
                                    <div class="form-group">
                                        <label for="kodepos">Kode Pos *</label>
                                        <input type="number" class="form-control" id="kodepos">
                                    </div>
                                    <div class="form-group">
                                        <label for="telp">Telp *</label>
                                        <input type="number" class="form-control" id="telp">
                                    </div>
                                    <div class="form-group">
                                      <label for="">Pendidikan</label>
                                      <select class="form-control" name="" id="">
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA</option>
                                        <option value="D1">D1</option>
                                        <option value="D3">D3</option>
                                        <option value="D4">D4</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="">Pekerjaan</label>
                                      <select class="form-control" name="" id="">
                                        <option value="Swasta">Swasta</option>
                                        <option value="PNS">PNS</option>
                                        <option value="Wiraswasta">Wiraswasta</option>
                                        <option value="Petani">Petani</option>
                                        <option value="Buruh">Buruh</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="">Rata-rata Penghasilan tetap Perbulan</label>
                                      <select class="form-control" name="" id="">
                                        <option value="<1jt">< Rp 1000.000,-</option>
                                        <option value="1jt-2jt">Rp 1.000.000,- - Rp 2.0000.000,-</option>
                                        <option value="2jt-3jt">Rp 2.000.000,- - Rp 3.0000.000,-</option>
                                        <option value="4jt-5jt">Rp 4.000.000,- - Rp 5.0000.000,-</option>
                                        <option value=">5jt"> > Rp 5.0000.000,-</option>
                                        <option value=">10jt"> > Rp 10.0000.000,-</option>
                                      </select>
                                    </div>
                                    
                                
                                </div> <!-- end right --> 
                            </div> <!-- end row -->

                        </div> <!-- identitas ortu end-->

                        <br>

                        <!-- identitas wali santri -->
                        <div>
                            <!-- left -->
                            <div class="col-md-12 col-lg-6 main-content">
                                    <div>
                                        <p><span class="w3-tag w3-xlarge" style="background-color:#28a745;padding-left:25px;">Identitas wali</span></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="namaAyah">Nama Lengkap *</label>
                                        <input type="text" class="form-control" id="namaAyah">
                                    </div>
                                    <div class="form-group">
                                        <label for="panggilanAyah">Nama Panggilan *</label>
                                        <input type="text" class="form-control" id="panggilanAyah">
                                    </div>
                                    <div class="form-group">
                                        <label for="nikAyah">NIK *</label>
                                        <input type="number" class="form-control" id="nikAyah">
                                    </div>
                                    <div class="form-group">
                                        <label for="tempatLahir">Tempat Lahir *</label>
                                        <input type="text" class="form-control" id="tempatLahir">
                                    </div>
                                    <div class="row">
                                        <!-- tgl -->
                                        <div class="col-sm-3 col-xs-12">
                                            <div class="form-group">
                                                <label for="">Tgl</label>
                                                <input type="number" min="1" max="31"  class="form-control" name="tgl"  id="tgl" required onkeyup="capt()">
                                                
                                                @if($errors->has('tempat_lahir'))
                                                <small class="text-danger">{{ $errors->first('tempat_lahir') }}</small>
                                                @endif
                                            </div>
                                        <!--/.form-group-->
                                        </div>
                                        <!--/.col-->
                                        <!-- bln -->
                                        <div class="col-sm-5 col-xs-12">
                                            <div class="form-group">
                                            <label for="">Bulan</label>
                                            <select class="form-control" name="bulan" id="">
                                                <option value="1">Januari</option>
                                                <option value="2">Februari</option>
                                                <option value="3">Maret</option>
                                                <option value="4">April</option>
                                                <option value="5">Mei</option>
                                                <option value="6">Juni</option>
                                                <option value="7">Juli</option>
                                                <option value="8">Agustus</option>
                                                <option value="9">September</option>
                                                <option value="10">Oktober</option>
                                                <option value="11">November</option>
                                                <option value="12">Desember</option>
                                            </select>
                                            </div>
                                        </div>
                                        <!--/.col-->
                                        <!-- thn -->
                                        <div class="col-sm-4 col-xs-12">
                                            <div class="form-group">
                                                <label for="">Tahun</label>
                                                <input type="number" min="1990" max="2018" class="form-control medqInput" name="tahun" id="tahun"  required onkeyup="capt()">
                                                @if($errors->has('tgl_lahir'))
                                                <small class="text-danger">{{ $errors->first('tgl_lahir') }}</small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="">Hubungan Ayah dengan Santri</label>
                                      <select class="form-control" name="" id="">
                                        <option value="kandung">Ayah Kandung</option>
                                        <option value="tiri">Ayah Tiri</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="">Status Ayah</label>
                                      <select class="form-control" name="" id="">
                                        <option>A</option>
                                        <option>B</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat *</label>
                                        <input type="text" class="form-control" id="alamat">
                                    </div>
                                    <div class="form-group">
                                        <label for="kabkota">Kota/Kabupaten *</label>
                                        <input type="text" class="form-control" id="kabkota">
                                    </div>
                                    <div class="form-group">
                                        <label for="prov">Provinsi *</label>
                                        <input type="text" class="form-control" id="prov">
                                    </div>
                                    <div class="form-group">
                                        <label for="kodepos">Kode Pos *</label>
                                        <input type="number" class="form-control" id="kodepos">
                                    </div>
                                    <div class="form-group">
                                        <label for="telp">Telp *</label>
                                        <input type="number" class="form-control" id="telp">
                                    </div>
                                    <div class="form-group">
                                      <label for="">Pendidikan</label>
                                      <select class="form-control" name="" id="">
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA</option>
                                        <option value="D1">D1</option>
                                        <option value="D3">D3</option>
                                        <option value="D4">D4</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="">Pekerjaan</label>
                                      <select class="form-control" name="" id="">
                                        <option value="Swasta">Swasta</option>
                                        <option value="PNS">PNS</option>
                                        <option value="Wiraswasta">Wiraswasta</option>
                                        <option value="Petani">Petani</option>
                                        <option value="Buruh">Buruh</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="">Rata-rata Penghasilan tetap Perbulan</label>
                                      <select class="form-control" name="" id="">
                                        <option value="<1jt">< Rp 1000.000,-</option>
                                        <option value="1jt-2jt">Rp 1.000.000,- - Rp 2.0000.000,-</option>
                                        <option value="2jt-3jt">Rp 2.000.000,- - Rp 3.0000.000,-</option>
                                        <option value="4jt-5jt">Rp 4.000.000,- - Rp 5.0000.000,-</option>
                                        <option value=">5jt"> > Rp 5.0000.000,-</option>
                                        <option value=">10jt"> > Rp 10.0000.000,-</option>
                                      </select>
                                    </div>
                                    
                                
                            </div> <!-- end left --> 
                            

                        </div> <!-- wali santri end-->

                        <br>

                        <!-- btn submit -->
                        <div class="form-group">
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