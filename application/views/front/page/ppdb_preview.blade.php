@extends('front.template')
@section('content')
<div class="wrap">
<section class="site-section py-lg">
   <div class="container">
      <div class="row blog-entries element-animate">
         <div class="col-md-12 col-lg-12 main-content">
            <h1 class="mb-1" style="text-align:center">DETAIL PENDAFTARAN</h1>
            <div class="post-content-body">
               <div class="comment-form-wrap pt-5">
                  <form action="#" class="p-5 bg-light">
                     <?= form_open_multipart('ppdb/santri/store') ?>
                     <!-- identitas siswa -->
                     <div>
                        <div class="row">
                           <!-- left -->
                           <div class="col-md-12 col-lg-8 main-content">
                            <div>
                                <p><span class="w3-tag w3-xlarge" style="background-color:#28a745;padding-left:50px;">Identitas Siswa</span></p>
                            </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="tingkatPendidikan"><b>Tingkat Pendidikan</b></label>
                                    </div>
                                    <div class="col">
                                        <label for="tingkatPendidikan">: ini isinya tingkat pendidikan</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="">Jenis Siswa</label>
                                    </div>
                                    <div class="col">
                                        <label for="">: isi jenis siswa</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="noinduk">No Induk *</label>
                                    </div>
                                    <div class="col">
                                        <label for="noinduk">: isi No Induk</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="nisn">NISN *</label>
                                    </div>
                                    <div class="col">
                                        <label for="nisn">: isi NISN *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="nama">Nama Lengkap *</label>
                                    </div>
                                    <div class="col">
                                        <label for="nama">: isi Nama Lengkap *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="namaPanggilan">Nama Panggilan *</label>
                                    </div>
                                    <div class="col">
                                        <label for="namaPanggilan">: isi Nama Panggilan *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="nik">NIK *</label>
                                    </div>
                                    <div class="col">
                                        <label for="nik">: isi NIK *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="kk">No KK *</label>
                                    </div>
                                    <div class="col">
                                        <label for="kk">: isi No KK *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="tempatLahir">Tempat Lahir *</label>
                                    </div>
                                    <div class="col">
                                        <label for="tempatLahir">: isi Tempat Lahir *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="tglLahir">Tanggal Lahir *</label>
                                    </div>
                                    <div class="col">
                                        <label for="tglLahir">: isi Tanggal Lahir *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="">Jenis Kelamin</label>
                                    </div>
                                    <div class="col">
                                        <label for="">: isi Jenis Kelamin</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="">Status dalam Keluarga</label>
                                    </div>
                                    <div class="col">
                                        <label for="">: isi Status dalam Keluarga</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                    <label for="anakke">Anak ke *</label>
                                    </div>
                                    <div class="col">
                                    <label for="anakke">: isi Anak ke *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="jmlsaudara">Jumlah Saudara *</label>
                                    </div>
                                    <div class="col">
                                        <label for="jmlsaudara">: isi Jumlah Saudara *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="kip">No KIP *</label>
                                    </div>
                                    <div class="col">
                                        <label for="kip">: isi No KIP *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="bpjs">No BPJS *</label>
                                    </div>
                                    <div class="col">
                                        <label for="bpjs">: isi No BPJS *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="jamkes">No Jamkes *</label>
                                    </div>
                                    <div class="col">
                                        <label for="jamkes">: isi No Jamkes *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="hobi">Hobi</label>
                                    </div>
                                    <div class="col">
                                        <label for="hobi">: isi Hobi</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="cita_cita">Cita-cita</label>
                                    </div>
                                    <div class="col">
                                        <label for="cita_cita">: isi Cita-cita</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="kebKhusus">Berkebutuhan Khusus</label>
                                    </div>
                                    <div class="col">
                                        <label for="kebKhusus">: isi Berkebutuhan Khusus</label>
                                    </div>
                                </div>
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
                                <div class="row">
                                    <div class="col">
                                        <label for="sekolah">Nama Sekolah *</label>
                                    </div>
                                    <div class="col">
                                        <label for="sekolah">: isi Nama Sekolah *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="jenisSekolah">Jenis Sekolah</label>
                                    </div>
                                    <div class="col">
                                        <label for="jenisSekolah">: isi Jenis Sekolah</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="statusSekolah">Status Sekolah</label>
                                    </div>
                                    <div class="col">
                                        <label for="statusSekolah">: isi Status Sekolah</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="alamat">Alamat Sekolah *</label>
                                    </div>
                                    <div class="col">
                                        <label for="alamat">: isi Alamat Sekolah *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="kabkota">Kota/Kabupaten *</label>
                                    </div>
                                    <div class="col">
                                        <label for="kabkota">: isi Kota/Kabupaten *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="prov">Provinsi *</label>
                                    </div>
                                    <div class="col">
                                        <label for="prov">: isi Provinsi *</label>
                                    </div>
                                </div>
                              </div>
                           </div>
                           <!-- end left -->
                           <!-- right -->
                           <div class="col-md-12 col-lg-6 main-content">
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="nss">NSS/NSM *</label>
                                    </div>
                                    <div class="col">
                                        <label for="nss">: isi NSS/NSM *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="npsn">NPSN *</label>
                                    </div>
                                    <div class="col">
                                        <label for="npsn">: isi NPSN *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="ijazah">No Seri Ijazah *</label>
                                    </div>
                                    <div class="col">
                                        <label for="ijazah">: isi No Seri Ijazah *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="skhun">No Seri SKHUN *</label>
                                    </div>
                                    <div class="col">
                                        <label for="skhun">: isi No Seri SKHUN *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="noUn">No Peserta Ujian UN *</label>
                                    </div>
                                    <div class="col">
                                        <label for="noUn">: isi No Peserta Ujian UN *</label>
                                    </div>
                                </div>
                              </div>
                           </div>
                           <!-- end right -->
                        </div>
                        <!-- end row -->
                     </div>
                     <!-- pendidikan sebelumnya end-->

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
                                <div class="row">
                                    <div class="col">
                                        <label for="namaAyah">Nama Lengkap *</label>
                                    </div>
                                    <div class="col">
                                        <label for="nama_ayah_siswa">: isi Nama Lengkap *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                    <label for="panggilanAyah">Nama Panggilan *</label>
                                    </div>
                                    <div class="col">
                                    <label for="napang_ayah_siswa">: Nama Panggilan *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="nikAyah">NIK *</label>
                                    </div>
                                    <div class="col">
                                        <label for="nikAyah">: NIK *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="tempatLahir">Tempat Lahir *</label>
                                    </div>
                                    <div class="col">
                                        <label for="tempatLahir">: Tempat Lahir *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="tanggalLahir">Tanggal Lahir *</label>
                                    </div>
                                    <div class="col">
                                        <label for="tanggalLahir" name="tempat_lahir_ayah">: Tanggal Lahir *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label>Hubungan Ayah dengan Santri</label>
                                    </div>
                                    <div class="col">
                                        <label>: isi Hubungan Ayah dengan Santri</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label>Status Ayah</label>
                                    </div>
                                    <div class="col">
                                        <label>: isi Status Ayah</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="alamat">Alamat *</label>
                                    </div>
                                    <div class="col">
                                        <label for="alamat">: isi Alamat *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="kabkota">Kota/Kabupaten *</label>
                                    </div>
                                    <div class="col">
                                        <label for="kabkota">: isi Kota/Kabupaten *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="prov">Provinsi *</label>
                                    </div>
                                    <div class="col">
                                        <label for="prov">: isi Provinsi *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="kodepos">Kode Pos *</label>
                                    </div>
                                    <div class="col">
                                        <label for="kodepos">:isi Kode Pos *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="telp">Telp *</label>
                                    </div>
                                    <div class="col">
                                        <label for="telp">: isi Telp *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="">Pendidikan</label>
                                    </div>
                                    <div class="col">
                                        <label for="">: isi Pendidikan</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="">Pekerjaan</label>
                                    </div>
                                    <div class="col">
                                        <label for="">: isi Pekerjaan</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="">Rata-rata Penghasilan tetap Perbulan</label>
                                    </div>
                                    <div class="col">
                                        <label for="">: isi Rata-rata Penghasilan tetap Perbulan</label>
                                    </div>
                                </div>
                              </div>
                           </div>
                           <!-- end left -->
                           <!-- right -->
                           <div class="col-md-12 col-lg-6 main-content">
                              <div>
                                 <p><span class="w3-tag w3-xlarge" style="background-color:#28a745;padding-left:25px;">Identitas Ibu</span></p>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="namaIbu">Nama Lengkap *</label>
                                    </div>
                                    <div class="col">
                                        <label for="nama_ibu_siswa">: isi Nama Lengkap *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                    <label for="panggilanIbu">Nama Panggilan *</label>
                                    </div>
                                    <div class="col">
                                    <label for="napang_ibu_siswa">: Nama Panggilan *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="nikIbu">NIK *</label>
                                    </div>
                                    <div class="col">
                                        <label for="nikIbu">: NIK *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="tempatLahir">Tempat Lahir *</label>
                                    </div>
                                    <div class="col">
                                        <label for="tempatLahir">: Tempat Lahir *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="tanggalLahir">Tanggal Lahir *</label>
                                    </div>
                                    <div class="col">
                                        <label for="tanggalLahir" name="tempat_lahir_ayah">: Tanggal Lahir *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label>Hubungan Ibu dengan Santri</label>
                                    </div>
                                    <div class="col">
                                        <label>: isi Hubungan Ibu dengan Santri</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label>Status Ibu</label>
                                    </div>
                                    <div class="col">
                                        <label>: isi Status Ibu</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="alamat">Alamat *</label>
                                    </div>
                                    <div class="col">
                                        <label for="alamat">: isi Alamat *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="kabkota">Kota/Kabupaten *</label>
                                    </div>
                                    <div class="col">
                                        <label for="kabkota">: isi Kota/Kabupaten *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="prov">Provinsi *</label>
                                    </div>
                                    <div class="col">
                                        <label for="prov">: isi Provinsi *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="kodepos">Kode Pos *</label>
                                    </div>
                                    <div class="col">
                                        <label for="kodepos">:isi Kode Pos *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="telp">Telp *</label>
                                    </div>
                                    <div class="col">
                                        <label for="telp">: isi Telp *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="">Pendidikan</label>
                                    </div>
                                    <div class="col">
                                        <label for="">: isi Pendidikan</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="">Pekerjaan</label>
                                    </div>
                                    <div class="col">
                                        <label for="">: isi Pekerjaan</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="">Rata-rata Penghasilan tetap Perbulan</label>
                                    </div>
                                    <div class="col">
                                        <label for="">: isi Rata-rata Penghasilan tetap Perbulan</label>
                                    </div>
                                </div>
                              </div>
                           </div>
                           <!-- end right -->
                        </div>
                        <!-- end row -->
                     </div>
                     <!-- identitas ortu end-->
                     <br>

                     <!-- identitas wali santri -->
                     <div>
                        <!-- left -->
                        <div class="col-md-12 col-lg-6 main-content">
                           <div>
                              <p><span class="w3-tag w3-xlarge" style="background-color:#28a745;padding-left:25px;">Identitas Wali</span></p>
                           </div>
                           <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="namaIbu">Nama Lengkap *</label>
                                    </div>
                                    <div class="col">
                                        <label for="nama_ibu_siswa">: isi Nama Lengkap *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                    <label for="panggilanIbu">Nama Panggilan *</label>
                                    </div>
                                    <div class="col">
                                    <label for="napang_ibu_siswa">: Nama Panggilan *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="nikIbu">NIK *</label>
                                    </div>
                                    <div class="col">
                                        <label for="nikIbu">: NIK *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="tempatLahir">Tempat Lahir *</label>
                                    </div>
                                    <div class="col">
                                        <label for="tempatLahir">: Tempat Lahir *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="tanggalLahir">Tanggal Lahir *</label>
                                    </div>
                                    <div class="col">
                                        <label for="tanggalLahir" name="tempat_lahir_ayah">: Tanggal Lahir *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label>Hubungan Ibu dengan Santri</label>
                                    </div>
                                    <div class="col">
                                        <label>: isi Hubungan Ibu dengan Santri</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label>Status Ibu</label>
                                    </div>
                                    <div class="col">
                                        <label>: isi Status Ibu</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="alamat">Alamat *</label>
                                    </div>
                                    <div class="col">
                                        <label for="alamat">: isi Alamat *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="kabkota">Kota/Kabupaten *</label>
                                    </div>
                                    <div class="col">
                                        <label for="kabkota">: isi Kota/Kabupaten *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="prov">Provinsi *</label>
                                    </div>
                                    <div class="col">
                                        <label for="prov">: isi Provinsi *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="kodepos">Kode Pos *</label>
                                    </div>
                                    <div class="col">
                                        <label for="kodepos">:isi Kode Pos *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="telp">Telp *</label>
                                    </div>
                                    <div class="col">
                                        <label for="telp">: isi Telp *</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="">Pendidikan</label>
                                    </div>
                                    <div class="col">
                                        <label for="">: isi Pendidikan</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="">Pekerjaan</label>
                                    </div>
                                    <div class="col">
                                        <label for="">: isi Pekerjaan</label>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="">Rata-rata Penghasilan tetap Perbulan</label>
                                    </div>
                                    <div class="col">
                                        <label for="">: isi Rata-rata Penghasilan tetap Perbulan</label>
                                    </div>
                                </div>
                              </div>
                        </div>
                        <!-- end left -->
                     </div>

                        <!-- berkas upload -->
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

                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- end foto -->
                           </div>
                           <!-- foto end -->

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
                                             <label for="">nama file foto</label>
                                             </td>
                                          </tr>
                                          <tr>
                                             <th>KK</th>
                                             <td>
                                             <label for="">nama file foto</label>
                                             </td>
                                          </tr>
                                          <tr>
                                             <th>BPJS</th>
                                             <td>
                                             <label for="">nama file foto</label>
                                             </td>
                                          </tr>
                                          <tr>
                                             <th>KTP</th>
                                             <td>
                                             <label for="">nama file foto</label>
                                             </td>
                                          </tr>
                                          <tr>
                                             <th>KTP Wali</th>
                                             <td>
                                             <label for="">nama file foto</label>
                                             </td>
                                          </tr>
                                          <tr>
                                             <th>KTP Ayah</th>
                                             <td>
                                             <label for="">nama file foto</label>
                                             </td>
                                          </tr>
                                          <tr>
                                             <th>KTP Ibu</th>
                                             <td>
                                             <label for="">nama file foto</label>
                                             </td>
                                          </tr>
                                          <tr>
                                             <th>Ijazah</th>
                                             <td>
                                             <label for="">nama file foto</label>
                                             </td>
                                          </tr>
                                          <tr>
                                             <th>SKHUN</th>
                                             <td>
                                             <label for="">nama file foto</label>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <!-- end foto -->
                           </div>
                           <!-- foto end row -->
                        </div>
                        <!-- berkas upload end-->
                        <br>

                        <!-- btn submit -->
                        <div class="form-group">
                            <center>
                                <div class="g-recaptcha" data-sitekey="6LesgYoUAAAAAFbqCI_A39QgBUO0CcfErCFo2TQ2"></div>
                            </center>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <input type="submit" style="margin:0 auto; display:block;" value="EDIT" class="btn btn-warning btn-lg">
                                </div>
                                <div class="col">
                                    <input type="submit" onclick="ara()" style="margin:0 auto; display:block;" value="DAFTAR" class="btn btn-info btn-lg">
                                </div>
                            </div>



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