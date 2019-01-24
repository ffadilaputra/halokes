<?php $__env->startSection('content'); ?>
<div class="wrap">
<section class="site-section py-lg">
   <div class="container">
      <div class="row blog-entries element-animate">
         <div class="col-md-12 col-lg-12 main-content">
            <h1 class="mb-1" style="text-align:center">PENDAFTARAN</h1>
            <div class="post-content-body">
               <div class="comment-form-wrap pt-5">

                  <form action="#" class="p-5 bg-light">

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
                                 <select class="form-control" name="tingkat_pendidikan" id="" value=<?php echo e(old('tingkat_pendidikan')); ?> required>
                                 <option <?php if(old('tingkat_pendidikan') == 'ma'): ?> selected <?php endif; ?> name="ma">Madarasah Aliyah</option>
                                 <option <?php if(old('tingkat_pendidikan') == 'mt'): ?> selected <?php endif; ?> value="mt">Madarasah Tsanawiyah</option>
                                 <option <?php if(old('tingkat_pendidikan') == 'md'): ?> selected <?php endif; ?> name="md">Madarasah Diniyah</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="">Jenis Siswa</label>
                                 <select class="form-control" name="jenis_siswa" value="<?php echo e(old('jenis_siswa')); ?>" required>
                                 <option <?php if(old('jenis_siswa') == 'lama'): ?> selected <?php endif; ?> value="lama">Lama</option>
                                 <option <?php if(old('jenis_siswa') == 'baru'): ?> selected <?php endif; ?> value="baru">Baru</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="noinduk">No Induk *</label>
                                 <input name="no_induk" type="number" class="form-control" id="noinduk" value="<?php echo e(old('no_induk')); ?>">
                                 <?php if($errors->has('no_induk')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('no_induk')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="nisn">NISN *</label>
                                 <input name="nisn" type="number" class="form-control" id="nisn" value="<?php echo e(old('nisn')); ?>">
                                 <?php if($errors->has('nisn')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('nisn')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="nama">Nama Lengkap *</label>
                                 <input name="nama_lengkap" type="text" class="form-control" id="nama" value="<?php echo e(old('nama_lengkap')); ?>" required>
                                 <?php if($errors->has('nama_lengkap')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('nama_lengkap')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="namaPanggilan">Nama Panggilan *</label>
                                 <input name="nama_panggilan" type="text" class="form-control" id="namaPanggilan" value="<?php echo e(old('nama_panggilan')); ?>" required>
                                 <?php if($errors->has('nama_panggilan')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('nama_panggilan')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="nik">NIK *</label>
                                 <input name="nik" type="number" class="form-control" id="nik" value="<?php echo e(old('nik')); ?>" required>
                                 <?php if($errors->has('nik')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('nik')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="kk">No KK *</label>
                                 <input name="no_kk" type="number" class="form-control" id="kk" value="<?php echo e(old('no_kk')); ?>" required>
                                 <?php if($errors->has('no_kk')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('no_kk')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="tempatLahir">Tempat Lahir *</label>
                                 <input name="tempat_lahir_siswa" type="text" class="form-control" id="tempatLahir" value="<?php echo e(old('tempat_lahir_siswa')); ?>" required>
                                 <?php if($errors->has('tempat_lahir_siswa')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('tempat_lahir_siswa')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="row">
                                 <!-- tgl -->
                                 <div class="col-sm-3 col-xs-12">
                                    <div class="form-group">
                                       <label for="">Tgl</label>
                                       <input type="number" min="1" max="31"  class="form-control" name="tgl_siswa"  id="tgl" required onkeyup="capt()" value="<?php echo e(old('tgl_siswa')); ?>">
                                       <?php if($errors->has('tgl_siswa')): ?>
                                       <small class="text-danger"><?php echo e($errors->first('tgl_siswa')); ?></small>
                                       <?php endif; ?>
                                    </div>
                                    <!--/.form-group-->
                                 </div>
                                 <!--/.col-->
                                 <!-- bln -->
                                 <div class="col-sm-5 col-xs-12">
                                    <div class="form-group">
                                       <label for="">Bulan</label>
                                       <select class="form-control" name="bulan_siswa" id="" value="<?php echo e(old('bulan_siswa')); ?>" required>
                                       <option <?php if(old('bulan_siswa') == 1): ?> selected <?php endif; ?> value="1">Januari</option>
                                       <option <?php if(old('bulan_siswa') == 2): ?> selected <?php endif; ?> value="2">Februari</option>
                                       <option <?php if(old('bulan_siswa') == 3): ?> selected <?php endif; ?> value="3">Maret</option>
                                       <option <?php if(old('bulan_siswa') == 4): ?> selected <?php endif; ?> value="4">April</option>
                                       <option <?php if(old('bulan_siswa') == 5): ?> selected <?php endif; ?> value="5">Mei</option>
                                       <option <?php if(old('bulan_siswa') == 6): ?> selected <?php endif; ?> value="6">Juni</option>
                                       <option <?php if(old('bulan_siswa') == 7): ?> selected <?php endif; ?> value="7">Juli</option>
                                       <option <?php if(old('bulan_siswa') == 8): ?> selected <?php endif; ?> value="8">Agustus</option>
                                       <option <?php if(old('bulan_siswa') == 9): ?> selected <?php endif; ?> value="9">September</option>
                                       <option <?php if(old('bulan_siswa') == 10): ?> selected <?php endif; ?> value="10">Oktober</option>
                                       <option <?php if(old('bulan_siswa') == 11): ?> selected <?php endif; ?> value="11">November</option>
                                       <option <?php if(old('bulan_siswa') == 12): ?> selected <?php endif; ?> value="12">Desember</option>
                                       </select>
                                    </div>
                                 </div>
                                 <!--/.col-->
                                 <!-- thn -->
                                 <div class="col-sm-4 col-xs-12">
                                    <div class="form-group">
                                       <label for="">Tahun</label>
                                       <input name="tahun_siswa"  type="number" min="1930" max="2018" class="form-control medqInput" id="tahun"  required onkeyup="capt()" value="<?php echo e(old('tahun_siswa')); ?>">
                                       <?php if($errors->has('tahun_siswa')): ?>
                                       <small class="text-danger"><?php echo e($errors->first('tahun_siswa')); ?></small>
                                       <?php endif; ?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- right -->
                           <div class="col-md-12 col-lg-6 main-content">
                              <div class="form-group">
                                 <label for="">Jenis Kelamin</label>
                                 <select class="form-control" name="jenis_kelamin" value="<?php echo e(old('jenis_kelamin')); ?>" required>
                                 <option <?php if(old('jenis_kelamin') == 'laki-laki'): ?> selected <?php endif; ?> value="laki-laki">Laki-Laki</option>
                                 <option <?php if(old('jenis_kelamin') == 'perempuan'): ?> selected <?php endif; ?> value="perempuan">Perempuan</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="">Status dalam Keluarga</label>
                                 <select class="form-control" name="status_keluarga" value="<?php echo e(old('status_keluarga')); ?>" required>
                                 <option <?php if(old('status_keluarga') == 'kandunh'): ?> selected <?php endif; ?> value="kandung">Kandung</option>
                                 <option <?php if(old('status_keluarga') == 'tiri'): ?> selected <?php endif; ?> value="tiri">Tiri</option>
                                 <option <?php if(old('status_keluarga') == 'asuh'): ?> selected <?php endif; ?> value="asuh">Asuh</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="anakke">Anak ke *</label>
                                 <input name="anak_ke" type="number" class="form-control" id="anakke" value="<?php echo e(old('anak_ke')); ?>" required>
                                 <?php if($errors->has('anak_ke')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('anak_ke')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="jmlsaudara">Jumlah Saudara *</label>
                                 <input name="jml_sdr" type="number" class="form-control" id="jmlsaudara" value="<?php echo e(old('jml_sdr')); ?>" required>
                                 <?php if($errors->has('jml_sdr')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('jml_sdr')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="kip">No KIP *</label>
                                 <input name="no_kip" type="number" class="form-control" id="kip" value="<?php echo e(old('no_kip')); ?>">
                                 <?php if($errors->has('no_kip')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('no_kip')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="bpjs">No BPJS *</label>
                                 <input name="no_bpjs" type="number" class="form-control" id="bpjs" value="<?php echo e(old('no_bpjs')); ?>">
                                 <?php if($errors->has('no_bpjs')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('no_bpjs')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="jamkes">No Jamkes *</label>
                                 <input name="no_jamkes" type="number" class="form-control" id="jamkes" value="<?php echo e(old('no_jamkes')); ?>">
                                 <?php if($errors->has('no_jamkes')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('no_jamkes')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="hobi">Hobi</label>
                                 <select name="hobi" class="form-control" id="hobi" value="<?php echo e(old('hobi')); ?>" required>
                                 <option <?php if(old('hobi') == 'olahraga'): ?> selected <?php endif; ?> value="olahraga">Olahraga</option>
                                 <option <?php if(old('hobi') == 'rekreasi'): ?> selected <?php endif; ?> value="rekreasi">Rekreasi</option>
                                 <option <?php if(old('hobi') == 'menulis'): ?> selected <?php endif; ?> value="menulis">Menulis</option>
                                 <option <?php if(old('hobi') == 'membaca'): ?> selected <?php endif; ?> value="membaca">Membaca</option>
                                 <option <?php if(old('hobi') == 'kesenian'): ?> selected <?php endif; ?> value="kesenian">Kesenian</option>
                                 <option <?php if(old('hobi') == 'lainnya'): ?> selected <?php endif; ?> value="Lainnya">lainnya</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="cita_cita">Cita-cita</label>
                                 <select class="form-control" name="cita_cita" id="citacita" value="<?php echo e(old('cita_cita')); ?>" required>
                                    <option <?php if(old('cita_cita') == 'pns'): ?> selected <?php endif; ?> value="pns">PNS</option>
                                    <option <?php if(old('cita_cita') == 'dokter'): ?> selected <?php endif; ?> value="dokter">dokter</option>
                                    <option <?php if(old('cita_cita') == 'ppekerjaserabutan'): ?> selected <?php endif; ?> value="pekerjaserabutan">Pekerja Serabutan</option>
                                    <option <?php if(old('cita_cita') == 'tnipolri'): ?> selected <?php endif; ?> value="tnipolri">TNI/Polri</option>
                                    <option <?php if(old('cita_cita') == 'politikus'): ?> selected <?php endif; ?> value="politikus">Politikus</option>
                                    <option <?php if(old('cita_cita') == 'guru'): ?> selected <?php endif; ?> value="guru">guru/dosen</option>
                                    <option <?php if(old('cita_cita') == 'wiraswasta'): ?> selected <?php endif; ?> value="wiraswasta">wiraswasta</option>
                                    <option <?php if(old('cita_cita') == 'lainnya'): ?> selected <?php endif; ?> value="lainnya">lainnya</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="kebKhusus">Berkebutuhan Khusus</label>
                                 <select class="form-control" name="keb_khusus" id="kebKhusus" value="<?php echo e(old('keb_khusus')); ?>" required>
                                 <option <?php if(old('keb_khusus') == 'null'): ?> selected <?php endif; ?> value="null">-- Piih --</option>
                                 <option <?php if(old('keb_khusus') == 'tunaRungu'): ?> selected <?php endif; ?> value="tunaRungu">Tuna Rungu</option>
                                 <option <?php if(old('keb_khusus') == 'tunaGrahita'): ?> selected <?php endif; ?> value="tunaGrahita">Tuna Grahita</option>
                                 <option <?php if(old('keb_khusus') == 'tunaNetra'): ?> selected <?php endif; ?> value="tunaNetra">Tuna Netra</option>
                                 <option <?php if(old('keb_khusus') == 'tunaLaras'): ?> selected <?php endif; ?> value="tunaLaras">Tuna Laras</option>
                                 <option <?php if(old('keb_khusus') == 'tunaDaksa'): ?> selected <?php endif; ?> value="tunaDaksa">Tuna Daksa</option>
                                 <option <?php if(old('keb_khusus') == 'sulitBelajar'): ?> selected <?php endif; ?> value="sulitBelajar">sulitBelajar</option>
                                 <option <?php if(old('keb_khusus') == 'gangguanKomunikasi'): ?> selected <?php endif; ?> value="gangguanKomunikasi">Gangguan Komunikasi</option>
                                 <option <?php if(old('keb_khusus') == 'lambanBelajar'): ?> selected <?php endif; ?> value="lambanBelajar">Lamban Belajar</option>
                                 <option <?php if(old('keb_khusus') == 'bakatLuarBiasa'): ?> selected <?php endif; ?> value="bakatLuarBiasa">Bakat Luar Biasa</option>
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
                                 <input name="nama_sekolah_siswa" type="text" class="form-control" id="sekolah" value="<?php echo e(old('nama_sekolah_siswa')); ?>">
                                 <?php if($errors->has('nama_sekolah_siswa')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('nama_sekolah_siswa')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="jenisSekolah">Jenis Sekolah</label>
                                 <select class="form-control" name="jenis_sekolah_siswa" id="jenisSekolah" value="<?php echo e(old('jenis_sekolah_siswa')); ?>">
                                 <option <?php if(old('jenis_sekolah_siswa') == 'sd'): ?> selected <?php endif; ?> value="sd">SD</option>
                                 <option <?php if(old('jenis_sekolah_siswa') == 'mi'): ?> selected <?php endif; ?> value="mi">MI</option>
                                 <option <?php if(old('jenis_sekolah_siswa') == 'smp'): ?> selected <?php endif; ?> value="smp">SMP</option>
                                 <option <?php if(old('jenis_sekolah_siswa') == 'mts'): ?> selected <?php endif; ?> value="mts">MTS</option>
                                 <option <?php if(old('jenis_sekolah_siswa') == 'sma/smk'): ?> selected <?php endif; ?> value="sma/smk">SMA/K</option>
                                 <option <?php if(old('jenis_sekolah_siswa') == 'ma'): ?> selected <?php endif; ?> value="ma">MA</option>
                                 <option <?php if(old('jenis_sekolah_siswa') == 'paketA'): ?> selected <?php endif; ?> value="paketA">paket A</option>
                                 <option <?php if(old('jenis_sekolah_siswa') == 'paketB'): ?> selected <?php endif; ?> value="paketB">paket B</option>
                                 <option <?php if(old('jenis_sekolah_siswa') == 'paketC'): ?> selected <?php endif; ?> value="paketC">paket C</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="statusSekolah">Status Sekolah</label>
                                 <select class="form-control" name="status_sekolah_siswa" id="statusSekolah" value="<?php echo e(old('status_sekolah_siswa')); ?>">
                                 <option <?php if(old('status_sekolah_siswa') == 'negeri'): ?> selected <?php endif; ?>>Negeri</option>
                                 <option <?php if(old('status_sekolah_siswa') == 'swasta'): ?> selected <?php endif; ?> >Swasta</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="alamat">Alamat Sekolah *</label>
                                 <input name="alamat_sekolah_siswa" type="text" class="form-control" id="alamat" value="<?php echo e(old('alamat_sekolah_siswa')); ?>">
                                 <?php if($errors->has('alamat_sekolah_siswa')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('alamat_sekolah_siswa')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="kabkota">Kota/Kabupaten *</label>
                                 <input name="kota" type="text" class="form-control" id="kabkota" value="<?php echo e(old('kota')); ?>">
                                 <?php if($errors->has('kota')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('kota')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="prov">Provinsi *</label>
                                 <input name="provinsi_siswa" type="text" class="form-control" id="prov" value="<?php echo e(old('provinsi_siswa')); ?>">
                                 <?php if($errors->has('provinsi_siswa')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('provinsi_siswa')); ?></small>
                                 <?php endif; ?>
                              </div>
                           </div>
                           <!-- end left -->
                           <!-- right -->
                           <div class="col-md-12 col-lg-6 main-content">
                              <div class="form-group">
                                 <label for="nss">NSS/NSM *</label>
                                 <input name="nss_siswa" type="number" class="form-control" id="nss">
                                 <?php if($errors->has('nss_siswa')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('nss_siswa')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="npsn">NPSN *</label>
                                 <input name="npsn_siswa" type="number" class="form-control" id="npsn">
                                 <?php if($errors->has('npsn_siswa')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('npsn_siswa')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="ijazah">No Seri Ijazah *</label>
                                 <input name="no_ijazah_siswa" type="text" class="form-control" id="noijazah">
                                 <?php if($errors->has('no_ijazah_siswa')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('no_ijazah_siswa')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="skhun">No Seri SKHUN *</label>
                                 <input name="skhun_siswa" type="text" class="form-control" id="skhun">
                                 <?php if($errors->has('skhun_siswa')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('skhun_siswa')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="noUn">No Peserta Ujian UN *</label>
                                 <input name="no_un_siswa" type="text" class="form-control" id="noUn">
                                 <?php if($errors->has('no_un_siswa')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('no_un_siswa')); ?></small>
                                 <?php endif; ?>
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
                                 <label for="namaAyah">Nama Lengkap *</label>
                                 <input name="nama_ayah_siswa" type="text" class="form-control" id="namaAyah" value="<?php echo e(old('nama_ayah_siswa')); ?>">
                                 <?php if($errors->has('nama_ayah_siswa')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('nama_ayah_siswa')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="panggilanAyah">Nama Panggilan *</label>
                                 <input name="napang_ayah_siswa" type="text" class="form-control" id="panggilanAyah" value="<?php echo e(old('napang_ayah_siswa')); ?>">
                                 <?php if($errors->has('napang_ayah_siswa')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('napang_ayah_siswa')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="nikAyah">NIK *</label>
                                 <input name="nik_ayah_siswa" type="number" class="form-control" id="nikAyah" value="<?php echo e(old('nik_ayah_siswa')); ?>">
                                 <?php if($errors->has('nik_ayah_siswa')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('nik_ayah_siswa')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="tempatLahir">Tempat Lahir *</label>
                                 <input name="tempat_lahir_ayah" type="text" class="form-control" id="tempat_lahir_ayah" value="<?php echo e(old('tempat_lahir_ayah')); ?>">
                                 <?php if($errors->has('tempat_lahir_ayah')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('tempat_lahir_ayah')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="row">
                                 <!-- tgl -->
                                 <div class="col-sm-3 col-xs-12">
                                    <div class="form-group">
                                       <label for="">Tgl</label>
                                       <input type="number" min="1" max="31"  class="form-control" name="tgl_ayah"  id="tgl" required onkeyup="capt()" value="<?php echo e(old('tgl_ayah')); ?>">
                                       <?php if($errors->has('tgl_ayah')): ?>
                                       <small class="text-danger"><?php echo e($errors->first('tgl_ayah')); ?></small>
                                       <?php endif; ?>
                                    </div>
                                    <!--/.form-group-->
                                 </div>
                                 <!--/.col-->
                                 <!-- bln -->
                                 <div class="col-sm-5 col-xs-12">
                                    <div class="form-group">
                                       <label for="">Bulan</label>
                                       <select class="form-control" name="bulan_ayah" id="" value="<?php echo e(old('bulan_ayah')); ?>">
                                       <option <?php if(old('bulan_ayah') == 1): ?> selected <?php endif; ?> value="1">Januari</option>
                                       <option <?php if(old('bulan_ayah') == 2): ?> selected <?php endif; ?> value="2">Februari</option>
                                       <option <?php if(old('bulan_ayah') == 3): ?> selected <?php endif; ?> value="3">Maret</option>
                                       <option <?php if(old('bulan_ayah') == 4): ?> selected <?php endif; ?> value="4">April</option>
                                       <option <?php if(old('bulan_ayah') == 5): ?> selected <?php endif; ?> value="5">Mei</option>
                                       <option <?php if(old('bulan_ayah') == 6): ?> selected <?php endif; ?> value="6">Juni</option>
                                       <option <?php if(old('bulan_ayah') == 7): ?> selected <?php endif; ?> value="7">Juli</option>
                                       <option <?php if(old('bulan_ayah') == 8): ?> selected <?php endif; ?> value="8">Agustus</option>
                                       <option <?php if(old('bulan_ayah') == 9): ?> selected <?php endif; ?> value="9">September</option>
                                       <option <?php if(old('bulan_ayah') == 10): ?> selected <?php endif; ?> value="10">Oktober</option>
                                       <option <?php if(old('bulan_ayah') == 11): ?> selected <?php endif; ?> value="11">November</option>
                                       <option <?php if(old('bulan_ayah') == 12): ?> selected <?php endif; ?> value="12">Desember</option>
                                       </select>
                                    </div>
                                 </div>
                                 <!--/.col-->
                                 <!-- thn -->
                                 <div class="col-sm-4 col-xs-12">
                                    <div class="form-group">
                                       <label for="">Tahun</label>
                                       <input name="tahun_ayah"  type="number" min="1930" max="2018" class="form-control medqInput" id="tahun"  required onkeyup="capt()" value="<?php echo e(old('tahun_ayah')); ?>">
                                       <?php if($errors->has('tahun_ayah')): ?>
                                       <small class="text-danger"><?php echo e($errors->first('tahun_ayah')); ?></small>
                                       <?php endif; ?>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label>Hubungan Ayah dengan Santri</label>
                                 <select class="form-control" name="hbgn_ayah_santri">
                                 <option <?php if(old('hbgn_ayah_santri') == 'kandung'): ?> selected <?php endif; ?> value="kandung">Ayah Kandung</option>
                                 <option <?php if(old('hbgn_ayah_santri') == 'tiri'): ?> selected <?php endif; ?> value="tiri">Ayah Tiri</option>
                                 <option <?php if(old('hbgn_ayah_santri') == 'angkat'): ?> selected <?php endif; ?> value="angkat">Ayah Angkat</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Status Ayah</label>
                                 <select class="form-control" name="status_ayah_santri">
                                 <option <?php if(old('status_ayah_santri') == 'hidup'): ?> selected <?php endif; ?> value="hidup">Hidup</option>
                                 <option <?php if(old('status_ayah_santri') == 'meninggal'): ?> selected <?php endif; ?> value="meninggal">Meninggal</option>
                                 <option <?php if(old('status_ayah_santri') == 'hilang'): ?> selected <?php endif; ?> value="hilang">Hilang</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="alamat">Alamat *</label>
                                 <input name="alamat_ayah" type="text" class="form-control" id="alamat" value="<?php echo e(old('alamat_ayah')); ?>">
                                 <?php if($errors->has('alamat_ayah')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('alamat_ayah')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="kabkota">Kota/Kabupaten *</label>
                                 <input name="kabkota_ayah" type="text" class="form-control" id="kabkota" value="<?php echo e(old('kabkota_ayah')); ?>">
                                 <?php if($errors->has('kabkota_ayah')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('kabkota_ayah')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="prov">Provinsi *</label>
                                 <input name="provinsi_ayah" type="text" class="form-control" id="prov" value="<?php echo e(old('provinsi_ayah')); ?>">
                                 <?php if($errors->has('provinsi_ayah')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('provinsi_ayah')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="kodepos">Kode Pos *</label>
                                 <input name="kodepos_ayah" type="number" class="form-control" id="kodepos" value="<?php echo e(old('kodepos_ayah')); ?>">
                                 <?php if($errors->has('kodepos_ayah')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('kodepos_ayah')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="telp">Telp *</label>
                                 <input name="telepon_ayah" type="number" class="form-control" id="telp">
                                 <?php if($errors->has('telepon_ayah')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('telepon_ayah')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="">Pendidikan</label>
                                 <select class="form-control" name="pendidikan_terakhir_ayah" id="" value="<?php echo e(old('pendidikan_terakhir_ayah')); ?>">
                                 <option <?php if(old('pendidikan_terakhir_ayah') == 'SD/MI'): ?> selected <?php endif; ?> value="SD/MI">SD/MI</option>
                                 <option <?php if(old('pendidikan_terakhir_ayah') == 'SMP/MTs/SLTP'): ?> selected <?php endif; ?> value="SMP/MTs/SLTP">SMP/MTs/SLTP</option>
                                 <option <?php if(old('pendidikan_terakhir_ayah') == 'SMA/MA/SLTA/SMK'): ?> selected <?php endif; ?> value="SMA/MA/SLTA/SMK">SMA/MA/SLTA/SMK</option>
                                 <option <?php if(old('pendidikan_terakhir_ayah') == 'D1'): ?> selected <?php endif; ?> value="D1">D1</option>
                                 <option <?php if(old('pendidikan_terakhir_ayah') == 'D2'): ?> selected <?php endif; ?> value="D3">D3</option>
                                 <option <?php if(old('pendidikan_terakhir_ayah') == 'D4'): ?> selected <?php endif; ?> value="D4">D4</option>
                                 <option <?php if(old('pendidikan_terakhir_ayah') == 'S1'): ?> selected <?php endif; ?> value="S1">S1</option>
                                 <option <?php if(old('pendidikan_terakhir_ayah') == 'S2'): ?> selected <?php endif; ?> value="S2">S2</option>
                                 <option <?php if(old('pendidikan_terakhir_ayah') == 'S3'): ?> selected <?php endif; ?> value="S3">S3</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="">Pekerjaan</label>
                                 <select class="form-control" name="pekerjaan_ayah" id="">
                                 <option <?php if(old('pekerjaan_ayah') == 'Swasta'): ?> selected <?php endif; ?> value="Swasta">Swasta</option>
                                 <option <?php if(old('pekerjaan_ayah') == 'PNS'): ?> selected <?php endif; ?> value="PNS">PNS</option>
                                 <option <?php if(old('pekerjaan_ayah') == 'Wiraswasta'): ?> selected <?php endif; ?> value="Wiraswasta">Wiraswasta</option>
                                 <option <?php if(old('pekerjaan_ayah') == 'Petani'): ?> selected <?php endif; ?> value="Petani">Petani</option>
                                 <option <?php if(old('pekerjaan_ayah') == 'Buruh'): ?> selected <?php endif; ?> value="Buruh">Buruh</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="">Rata-rata Penghasilan tetap Perbulan</label>
                                 <select class="form-control" name="penghasilan_ayah" id="">
                                 <option <?php if(old('penghasilan_ayah') == '<1jt'): ?> selected <?php endif; ?> value="<1jt">< Rp 1000.000,-</option>
                                 <option <?php if(old('penghasilan_ayah') == '1jt-2jt'): ?> selected <?php endif; ?> value="1jt-2jt">Rp 1.000.000,- - Rp 2.0000.000,-</option>
                                 <option <?php if(old('penghasilan_ayah') == '2jt-3jt'): ?> selected <?php endif; ?> value="2jt-3jt">Rp 2.000.000,- - Rp 3.0000.000,-</option>
                                 <option <?php if(old('penghasilan_ayah') == '4jt-5jt'): ?> selected <?php endif; ?> value="4jt-5jt">Rp 4.000.000,- - Rp 5.0000.000,-</option>
                                 <option <?php if(old('penghasilan_ayah') == '>5jt'): ?> selected <?php endif; ?> value=">5jt"> > Rp 5.0000.000,-</option>
                                 <option <?php if(old('penghasilan_ayah') == '>10jt'): ?> selected <?php endif; ?> value=">10jt"> > Rp 10.0000.000,-</option>
                                 </select>
                              </div>
                           </div>
                           <!-- end left -->
                           <!-- right -->
                           <div class="col-md-12 col-lg-6 main-content">
                              <div>
                                 <p><span class="w3-tag w3-xlarge" style="background-color:#28a745;padding-left:25px;">Identitas Ibu</span></p>
                              </div>
                              <div class="form-group">
                                 <label for="namaIbu">Nama Lengkap *</label>
                                 <input name="nama_ibu_siswa" type="text" class="form-control" id="namaIbu" value="<?php echo e(old('nama_ibu_siswa')); ?>">
                                 <?php if($errors->has('nama_ibu_siswa')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('nama_ibu_siswa')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="panggilanIbu">Nama Panggilan *</label>
                                 <input name="napang_ibu_siswa" type="text" class="form-control" id="panggilanIbu" value="<?php echo e(old('napang_ibu_siswa')); ?>">
                                 <?php if($errors->has('napang_ibu_siswa')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('napang_ibu_siswa')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="nikIbu">NIK *</label>
                                 <input name="nik_ibu_siswa" type="number" class="form-control" id="nikIbu" value="<?php echo e(old('nik_ibu_siswa')); ?>">
                                 <?php if($errors->has('nik_ibu_siswa')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('nik_ibu_siswa')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="tempatLahir">Tempat Lahir *</label>
                                 <input name="tempat_lahir_ibu" type="text" class="form-control" id="tempatLahir" value="<?php echo e(old('tempat_lahir_ibu')); ?>">
                                 <?php if($errors->has('tempat_lahir_ibu')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('tempat_lahir_ibu')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="row">
                                 <!-- tgl -->
                                 <div class="col-sm-3 col-xs-12">
                                    <div class="form-group">
                                       <label for="">Tgl</label>
                                       <input type="number" min="1" max="31"  class="form-control" name="tgl_ibu"  id="tgl" required onkeyup="capt()" value="<?php echo e(old('tgl_ibu')); ?>">
                                       <?php if($errors->has('tgl_ibu')): ?>
                                       <small class="text-danger"><?php echo e($errors->first('tgl_ibu')); ?></small>
                                       <?php endif; ?>
                                    </div>
                                    <!--/.form-group-->
                                 </div>
                                 <!--/.col-->
                                 <!-- bln -->
                                 <div class="col-sm-5 col-xs-12">
                                    <div class="form-group">
                                       <label for="">Bulan</label>
                                       <select class="form-control" name="bulan_ibu" id="" value="<?php echo e(old('bulan_ibu')); ?>">
                                       <option <?php if(old('bulan_ibu') == 1): ?> selected <?php endif; ?> value="1">Januari</option>
                                       <option <?php if(old('bulan_ibu') == 2): ?> selected <?php endif; ?> value="2">Februari</option>
                                       <option <?php if(old('bulan_ibu') == 3): ?> selected <?php endif; ?> value="3">Maret</option>
                                       <option <?php if(old('bulan_ibu') == 4): ?> selected <?php endif; ?> value="4">April</option>
                                       <option <?php if(old('bulan_ibu') == 5): ?> selected <?php endif; ?> value="5">Mei</option>
                                       <option <?php if(old('bulan_ibu') == 6): ?> selected <?php endif; ?> value="6">Juni</option>
                                       <option <?php if(old('bulan_ibu') == 7): ?> selected <?php endif; ?> value="7">Juli</option>
                                       <option <?php if(old('bulan_ibu') == 8): ?> selected <?php endif; ?> value="8">Agustus</option>
                                       <option <?php if(old('bulan_ibu') == 9): ?> selected <?php endif; ?> value="9">September</option>
                                       <option <?php if(old('bulan_ibu') == 10): ?> selected <?php endif; ?> value="10">Oktober</option>
                                       <option <?php if(old('bulan_ibu') == 11): ?> selected <?php endif; ?> value="11">November</option>
                                       <option <?php if(old('bulan_ibu') == 12): ?> selected <?php endif; ?> value="12">Desember</option>
                                       </select>
                                    </div>
                                 </div>
                                 <!--/.col-->
                                 <!-- thn -->
                                 <div class="col-sm-4 col-xs-12">
                                    <div class="form-group">
                                       <label for="">Tahun</label>
                                       <input name="tahun_ibu"  type="number" min="1930" max="2018" class="form-control medqInput" id="tahun"  required onkeyup="capt()" value="<?php echo e(old('tahun_ibu')); ?>">
                                       <?php if($errors->has('tahun_ibu')): ?>
                                       <small class="text-danger"><?php echo e($errors->first('tahun_ibu')); ?></small>
                                       <?php endif; ?>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="">Hubungan Ibu dengan Santri</label>
                                 <select class="form-control" name="hbgn_ibu_santri">
                                 <option <?php if(old('hbgn_ibu_santri') == 'kandung'): ?> selected <?php endif; ?> value="kandung">Ibu Kandung</option>
                                 <option <?php if(old('hbgn_ibu_santri') == 'tiri'): ?> selected <?php endif; ?> value="tiri">Ibu Tiri</option>
                                 <option <?php if(old('hbgn_ibu_santri') == 'angkat'): ?> selected <?php endif; ?> value="angkat">Ibu Angkat</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="">Status Ibu</label>
                                 <select class="form-control" name="status_ibu_santri" id="">
                                 <option <?php if(old('status_ibu_santri') == 'hidup'): ?> selected <?php endif; ?> value="hidup">Hidup</option>
                                 <option <?php if(old('status_ibu_santri') == 'meninggal'): ?> selected <?php endif; ?> value="meninggal">Meninggal</option>
                                 <option <?php if(old('status_ibu_santri') == 'hilang'): ?> selected <?php endif; ?> value="hilang">Hilang</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="alamat">Alamat *</label>
                                 <input name="alamat_ibu" type="text" class="form-control" id="alamat" value="<?php echo e(old('alamat_ibu')); ?>">
                                 <?php if($errors->has('alamat_ibu')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('alamat_ibu')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="kabkota">Kota/Kabupaten *</label>
                                 <input name="kabkota_ibu" type="text" class="form-control" id="kabkota" value="<?php echo e(old('kabkota_ibu')); ?>">
                                 <?php if($errors->has('kabkota_ibu')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('kabkota_ibu')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="prov">Provinsi *</label>
                                 <input name="provinsi_ibu" type="text" class="form-control" id="prov" value="<?php echo e(old('provinsi_ibu')); ?>">
                                 <?php if($errors->has('provinsi_ibu')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('provinsi_ibu')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="prov">Kode Pos *</label>
                                 <input name="kodepos_ibu" type="text" class="form-control" id="prov" value="<?php echo e(old('provinsi_ibu')); ?>">
                                 <?php if($errors->has('kodepos_ibu')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('kodepos_ibu')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="telp">Telp *</label>
                                 <input name="telepon_ibu" type="number" class="form-control" id="telp">
                                 <?php if($errors->has('telepon_ibu')): ?>
                                 <small class="text-danger"><?php echo e($errors->first('telepon_ibu')); ?></small>
                                 <?php endif; ?>
                              </div>
                              <div class="form-group">
                                 <label for="">Pendidikan</label>
                                 <select class="form-control" name="pendidikan_terakhir_ibu" id="" value="<?php echo e(old('pendidikan_terakhir_ibu')); ?>">
                                 <option <?php if(old('pendidikan_terakhir_ibu') == 'SD/MI'): ?> selected <?php endif; ?> value="SD/MI">SD/MI</option>
                                 <option <?php if(old('pendidikan_terakhir_ibu') == 'SMP/MTs/SLTP'): ?> selected <?php endif; ?> value="SMP/MTs/SLTP">SMP/MTs/SLTP</option>
                                 <option <?php if(old('pendidikan_terakhir_ibu') == 'SMA/MA/SLTA/SMK'): ?> selected <?php endif; ?> value="SMA/MA/SLTA/SMK">SMA/MA/SLTA/SMK</option>
                                 <option <?php if(old('pendidikan_terakhir_ibu') == 'D1'): ?> selected <?php endif; ?> value="D1">D1</option>
                                 <option <?php if(old('pendidikan_terakhir_ibu') == 'D2'): ?> selected <?php endif; ?> value="D3">D3</option>
                                 <option <?php if(old('pendidikan_terakhir_ibu') == 'D4'): ?> selected <?php endif; ?> value="D4">D4</option>
                                 <option <?php if(old('pendidikan_terakhir_ibu') == 'S1'): ?> selected <?php endif; ?> value="S1">S1</option>
                                 <option <?php if(old('pendidikan_terakhir_ibu') == 'S2'): ?> selected <?php endif; ?> value="S2">S2</option>
                                 <option <?php if(old('pendidikan_terakhir_ibu') == 'S3'): ?> selected <?php endif; ?> value="S3">S3</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="">Pekerjaan</label>
                                 <select class="form-control" name="pekerjaan_ibu" id="">
                                 <option <?php if(old('pekerjaan_ibu') == 'Swasta'): ?> selected <?php endif; ?> value="Swasta">Swasta</option>
                                 <option <?php if(old('pekerjaan_ibu') == 'PNS'): ?> selected <?php endif; ?> value="PNS">PNS</option>
                                 <option <?php if(old('pekerjaan_ibu') == 'Wiraswasta'): ?> selected <?php endif; ?> value="Wiraswasta">Wiraswasta</option>
                                 <option <?php if(old('pekerjaan_ibu') == 'Petani'): ?> selected <?php endif; ?> value="Petani">Petani</option>
                                 <option <?php if(old('pekerjaan_ibu') == 'Buruh'): ?> selected <?php endif; ?> value="Buruh">Buruh</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="">Rata-rata Penghasilan tetap Perbulan</label>
                                 <select class="form-control" name="penghasilan_ibu" id="">
                                 <option <?php if(old('penghasilan_ibu') == '<1jt'): ?> selected <?php endif; ?> value="<1jt">< Rp 1000.000,-</option>
                                 <option <?php if(old('penghasilan_ibu') == '1jt-2jt'): ?> selected <?php endif; ?> value="1jt-2jt">Rp 1.000.000,- - Rp 2.0000.000,-</option>
                                 <option <?php if(old('penghasilan_ibu') == '2jt-3jt'): ?> selected <?php endif; ?> value="2jt-3jt">Rp 2.000.000,- - Rp 3.0000.000,-</option>
                                 <option <?php if(old('penghasilan_ibu') == '4jt-5jt'): ?> selected <?php endif; ?> value="4jt-5jt">Rp 4.000.000,- - Rp 5.0000.000,-</option>
                                 <option <?php if(old('penghasilan_ibu') == '>5jt'): ?> selected <?php endif; ?> value=">5jt"> > Rp 5.0000.000,-</option>
                                 <option <?php if(old('penghasilan_ibu') == '>10jt'): ?> selected <?php endif; ?> value=">10jt"> > Rp 10.0000.000,-</option>
                                 </select>
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
                              <label for="namaAyah">Nama Lengkap *</label>
                              <input name="nama_wali_siswa" type="text" class="form-control" id="namawali" value="<?php echo e(old('nama_wali_siswa')); ?>">
                              <?php if($errors->has('nama_wali_siswa')): ?>
                              <small class="text-danger"><?php echo e($errors->first('nama_wali_siswa')); ?></small>
                              <?php endif; ?>
                           </div>
                           <div class="form-group">
                              <label for="panggilanwali">Nama Panggilan *</label>
                              <input name="napang_wali_siswa" type="text" class="form-control" id="panggilanwali" value="<?php echo e(old('napang_wali_siswa')); ?>">
                              <?php if($errors->has('napang_wali_siswa')): ?>
                              <small class="text-danger"><?php echo e($errors->first('napang_wali_siswa')); ?></small>
                              <?php endif; ?>
                           </div>
                           <div class="form-group">
                              <label for="nikwali">NIK *</label>
                              <input name="nik_wali_siswa" type="number" class="form-control" id="nikwali" value="<?php echo e(old('nik_wali_siswa')); ?>">
                              <?php if($errors->has('nik_wali_siswa')): ?>
                              <small class="text-danger"><?php echo e($errors->first('nik_wali_siswa')); ?></small>
                              <?php endif; ?>
                           </div>
                           <div class="form-group">
                              <label for="tempatLahir">Tempat Lahir *</label>
                              <input name="tempat_lahir_wali" type="text" class="form-control" id="tempat_lahir_wali" value="<?php echo e(old('tempat_lahir_wali')); ?>">
                              <?php if($errors->has('tempat_lahir_wali')): ?>
                              <small class="text-danger"><?php echo e($errors->first('tempat_lahir_wali')); ?></small>
                              <?php endif; ?>
                           </div>
                           <div class="row">
                              <!-- tgl -->
                              <div class="col-sm-3 col-xs-12">
                                 <div class="form-group">
                                    <label for="">Tgl</label>
                                    <input type="number" min="1" max="31"  class="form-control" name="tgl_wali"  id="tgl" required onkeyup="capt()" value="<?php echo e(old('tgl_wali')); ?>">
                                    <?php if($errors->has('tgl_wali')): ?>
                                    <small class="text-danger"><?php echo e($errors->first('tgl_wali')); ?></small>
                                    <?php endif; ?>
                                 </div>
                                 <!--/.form-group-->
                              </div>
                              <!--/.col-->
                              <!-- bln -->
                              <div class="col-sm-5 col-xs-12">
                                 <div class="form-group">
                                    <label for="">Bulan</label>
                                    <select class="form-control" name="bulan_wali" id="" value="<?php echo e(old('bulan_wali')); ?>">
                                    <option <?php if(old('bulan_wali') == 1): ?> selected <?php endif; ?> value="1">Januari</option>
                                    <option <?php if(old('bulan_wali') == 2): ?> selected <?php endif; ?> value="2">Februari</option>
                                    <option <?php if(old('bulan_wali') == 3): ?> selected <?php endif; ?> value="3">Maret</option>
                                    <option <?php if(old('bulan_wali') == 4): ?> selected <?php endif; ?> value="4">April</option>
                                    <option <?php if(old('bulan_wali') == 5): ?> selected <?php endif; ?> value="5">Mei</option>
                                    <option <?php if(old('bulan_wali') == 6): ?> selected <?php endif; ?> value="6">Juni</option>
                                    <option <?php if(old('bulan_wali') == 7): ?> selected <?php endif; ?> value="7">Juli</option>
                                    <option <?php if(old('bulan_wali') == 8): ?> selected <?php endif; ?> value="8">Agustus</option>
                                    <option <?php if(old('bulan_wali') == 9): ?> selected <?php endif; ?> value="9">September</option>
                                    <option <?php if(old('bulan_wali') == 10): ?> selected <?php endif; ?> value="10">Oktober</option>
                                    <option <?php if(old('bulan_wali') == 11): ?> selected <?php endif; ?> value="11">November</option>
                                    <option <?php if(old('bulan_wali') == 12): ?> selected <?php endif; ?> value="12">Desember</option>
                                    </select>
                                 </div>
                              </div>
                              <!--/.col-->
                              <!-- thn -->
                              <div class="col-sm-4 col-xs-12">
                                 <div class="form-group">
                                    <label for="">Tahun</label>
                                    <input name="tahun_wali"  type="number" min="1930" max="2018" class="form-control medqInput" id="tahun"  required onkeyup="capt()" value="<?php echo e(old('tahun_wali')); ?>">
                                    <?php if($errors->has('tahun_wali')): ?>
                                    <small class="text-danger"><?php echo e($errors->first('tahun_wali')); ?></small>
                                    <?php endif; ?>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <label>Hubungan wali dengan Santri</label>
                              <select class="form-control" name="hbgn_wali_santri">
                              <option <?php if(old('hbgn_wali_santri') == 'kandung'): ?> selected <?php endif; ?> value="kandung">wali Kandung</option>
                              <option <?php if(old('hbgn_wali_santri') == 'tiri'): ?> selected <?php endif; ?> value="tiri">wali Tiri</option>
                              </select>
                           </div>
                           <div class="form-group">
                              <label>Status wali</label>
                              <select class="form-control" name="status_wali_santri">
                                 <option <?php if(old('status_wali_santri') == 'hidup'): ?> selected <?php endif; ?> value="hidup">Hidup</option>
                                 <option <?php if(old('status_wali_santri') == 'meninggal'): ?> selected <?php endif; ?> value="meninggal">Meninggal</option>
                                 <option <?php if(old('status_wali_santri') == 'hilang'): ?> selected <?php endif; ?> value="hilang">Hilang</option>
                              </select>
                           </div>
                           <div class="form-group">
                              <label for="alamat">Alamat *</label>
                              <input name="alamat_wali" type="text" class="form-control" id="alamat" value="<?php echo e(old('alamat_wali')); ?>">
                              <?php if($errors->has('alamat_wali')): ?>
                              <small class="text-danger"><?php echo e($errors->first('alamat_wali')); ?></small>
                              <?php endif; ?>
                           </div>
                           <div class="form-group">
                              <label for="kabkota">Kota/Kabupaten *</label>
                              <input name="kabkota_wali" type="text" class="form-control" id="kabkota" value="<?php echo e(old('kabkota_wali')); ?>">
                              <?php if($errors->has('kabkota_wali')): ?>
                              <small class="text-danger"><?php echo e($errors->first('kabkota_wali')); ?></small>
                              <?php endif; ?>
                           </div>
                           <div class="form-group">
                              <label for="prov">Provinsi *</label>
                              <input name="provinsi_wali" type="text" class="form-control" id="prov" value="<?php echo e(old('provinsi_wali')); ?>">
                              <?php if($errors->has('provinsi_wali')): ?>
                              <small class="text-danger"><?php echo e($errors->first('provinsi_wali')); ?></small>
                              <?php endif; ?>
                           </div>
                           <div class="form-group">
                              <label for="kodepos">Kode Pos *</label>
                              <input name="kodepos_wali" type="number" class="form-control" id="kodepos" value="<?php echo e(old('kodepos_wali')); ?>">
                              <?php if($errors->has('kodepos_wali')): ?>
                              <small class="text-danger"><?php echo e($errors->first('kodepos_wali')); ?></small>
                              <?php endif; ?>
                           </div>
                           <div class="form-group">
                              <label for="telp">Telp *</label>
                              <input name="telepon_wali" type="number" class="form-control" id="telp">
                              <?php if($errors->has('telepon_wali')): ?>
                              <small class="text-danger"><?php echo e($errors->first('telepon_wali')); ?></small>
                              <?php endif; ?>
                           </div>
                           <div class="form-group">
                              <label for="">Pendidikan</label>
                              <select class="form-control" name="pendidikan_terakhir_wali" id="" value="<?php echo e(old('pendidikan_terakhir_wali')); ?>">
                                 <option <?php if(old('pendidikan_terakhir_wali') == 'SD/MI'): ?> selected <?php endif; ?> value="SD/MI">SD/MI</option>
                                 <option <?php if(old('pendidikan_terakhir_wali') == 'SMP/MTs/SLTP'): ?> selected <?php endif; ?> value="SMP/MTs/SLTP">SMP/MTs/SLTP</option>
                                 <option <?php if(old('pendidikan_terakhir_wali') == 'SMA/MA/SLTA/SMK'): ?> selected <?php endif; ?> value="SMA/MA/SLTA/SMK">SMA/MA/SLTA/SMK</option>
                                 <option <?php if(old('pendidikan_terakhir_wali') == 'D1'): ?> selected <?php endif; ?> value="D1">D1</option>
                                 <option <?php if(old('pendidikan_terakhir_wali') == 'D2'): ?> selected <?php endif; ?> value="D3">D3</option>
                                 <option <?php if(old('pendidikan_terakhir_wali') == 'D4'): ?> selected <?php endif; ?> value="D4">D4</option>
                                 <option <?php if(old('pendidikan_terakhir_wali') == 'S1'): ?> selected <?php endif; ?> value="S1">S1</option>
                                 <option <?php if(old('pendidikan_terakhir_wali') == 'S2'): ?> selected <?php endif; ?> value="S2">S2</option>
                                 <option <?php if(old('pendidikan_terakhir_wali') == 'S3'): ?> selected <?php endif; ?> value="S3">S3</option>
                              </select>
                           </div>
                           <div class="form-group">
                              <label for="">Pekerjaan</label>
                              <select class="form-control" name="pekerjaan_wali" id="">
                              <option <?php if(old('pekerjaan_wali') == 'Swasta'): ?> selected <?php endif; ?> value="Swasta">Swasta</option>
                              <option <?php if(old('pekerjaan_wali') == 'PNS'): ?> selected <?php endif; ?> value="PNS">PNS</option>
                              <option <?php if(old('pekerjaan_wali') == 'Wiraswasta'): ?> selected <?php endif; ?> value="Wiraswasta">Wiraswasta</option>
                              <option <?php if(old('pekerjaan_wali') == 'Petani'): ?> selected <?php endif; ?> value="Petani">Petani</option>
                              <option <?php if(old('pekerjaan_wali') == 'Buruh'): ?> selected <?php endif; ?> value="Buruh">Buruh</option>
                              </select>
                           </div>
                           <div class="form-group">
                              <label for="">Rata-rata Penghasilan tetap Perbulan</label>
                              <select class="form-control" name="penghasilan_wali" id="">
                              <option <?php if(old('penghasilan_wali') == '<1jt'): ?> selected <?php endif; ?> value="<1jt">< Rp 1000.000,-</option>
                              <option <?php if(old('penghasilan_wali') == '1jt-2jt'): ?> selected <?php endif; ?> value="1jt-2jt">Rp 1.000.000,- - Rp 2.0000.000,-</option>
                              <option <?php if(old('penghasilan_wali') == '2jt-3jt'): ?> selected <?php endif; ?> value="2jt-3jt">Rp 2.000.000,- - Rp 3.0000.000,-</option>
                              <option <?php if(old('penghasilan_wali') == '4jt-5jt'): ?> selected <?php endif; ?> value="4jt-5jt">Rp 4.000.000,- - Rp 5.0000.000,-</option>
                              <option <?php if(old('penghasilan_wali') == '>5jt'): ?> selected <?php endif; ?> value=">5jt"> > Rp 5.0000.000,-</option>
                              <option <?php if(old('penghasilan_wali') == '>10jt'): ?> selected <?php endif; ?> value=">10jt"> > Rp 10.0000.000,-</option>
                              </select>
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
                           <input type="submit" style="margin:0 auto; display:block;" value="DAFTAR" class="btn btn-info btn-lg">
                     </div>

                     <div>
                           <a href="<?php echo e(base_url('ppdb/santri/sukses')); ?>">sukses</a>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>