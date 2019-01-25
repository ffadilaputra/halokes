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
            <hr>
            <div class="col-lg-6">
               
               <table class="table table-bordered table-hover">
                   <tbody>
                       <tr>
                           <td class="col-sm-6 col-xs-6"><b>Tingkat Pendidikan</b></td>
                           <td class="col-sm-6 col-xs-6">{{ $santri->tingkat_pendidikan }}</td>
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
                            <td class="col-sm-6 col-xs-6">{{ $santri->tgl_lahir }}</td>
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
                           <td class="col-sm-6 col-xs-6">{{ $santri->nama_sekolah_siswa }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Jenis Sekolah</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->jenis_sekolah_siswa }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Status Sekolah</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->status_sekolah_siswa }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Alamat Sekolah</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->alamat_sekolah_siswa }}</td>
                       </tr>
                       <tr>
                            <!-- van iki kab/kota e alamatnya sekolah -->
                            <td class="col-sm-6 col-xs-6"><b>Kota/Kabupaten</b></td>
                            <td class="col-sm-6 col-xs-6">q binun</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Provinsi</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->provinsi_siswa }}</td>
                       </tr>
                   </tbody>
               </table>
               
            </div>
            <div class="col-lg-6">
              <table class="table table-bordered table-hover">
                   
                   <tbody>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>NSS/NSM</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->nss }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>NPSN</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->npsn }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>No Seri Ijazah</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->no_seri_ijazah }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>No Seri SKHUN</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->no_seri_skhun }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>No Peserta Ujian UN</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->no_peserta_ujian }}</td>
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
                            <td class="col-sm-6 col-xs-6"><b>Tempat Lahir</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->tempat_lahir }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Tanggal Lahir</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->tgl_lahir }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Hubungan Ayah dengan Santri</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->hbgn_ayah_santri }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Status Ayah</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->status_ayah }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Alamat</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->alamat }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Kota/Kabupaten</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->kota }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Provinsi</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->provinsi }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Kode Pos</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->kode_pos }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Telp</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->telepon }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Pendidikan</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->pendidikan }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Pekerjaan</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->pekerjaan }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Penghasilan Perbulan</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->penghasilan }}</td>
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
                            <td class="col-sm-6 col-xs-6"><b>Tempat Lahir</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->tempat_lahir }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Tanggal Lahir</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->tgl_lahir }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Hubungan Ayah dengan Santri</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->hbgn_ayah_santri }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Status Ayah</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->status_ayah }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Alamat</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->alamat }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Kota/Kabupaten</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->kota }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Provinsi</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->provinsi }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Kode Pos</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->kode_pos }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Telp</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->telepon }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Pendidikan</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->pendidikan }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Pekerjaan</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->pekerjaan }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Penghasilan Perbulan</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->penghasilan }}</td>
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
                            <td class="col-sm-6 col-xs-6"><b>Tempat Lahir</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->tempat_lahir }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Tanggal Lahir</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->tgl_lahir }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Hubungan Ayah dengan Santri</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->hbgn_ayah_santri }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Status Ayah</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->status_ayah }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Alamat</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->alamat }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Kota/Kabupaten</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->kota }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Provinsi</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->provinsi }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Kode Pos</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->kode_pos }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Telp</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->telepon }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Pendidikan</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->pendidikan }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Pekerjaan</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->pekerjaan }}</td>
                       </tr>
                       <tr>
                            <td class="col-sm-6 col-xs-6"><b>Penghasilan Perbulan</b></td>
                            <td class="col-sm-6 col-xs-6">{{ $santri->penghasilan }}</td>
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
                                <img id="santri" src="{{ base_url('assets/wordify/') }}images/img_1.jpg" alt="your image" style="width:150px; height:200px; background-color:#eeeeee;" />
                                </center>
                           </td>
                           <td>
                                <center>
                                <img id="santri" src="{{ base_url('assets/wordify/') }}images/img_1.jpg" alt="your image" style="width:150px; height:200px; background-color:#eeeeee;" />
                                </center>
                           </td>
                           <td>
                                <center>
                                <img id="santri" src="{{ base_url('assets/wordify/') }}images/img_1.jpg" alt="your image" style="width:150px; height:200px; background-color:#eeeeee;" />
                                </center>
                           </td>
                           <td>
                                <center>
                                <img id="santri" src="{{ base_url('assets/wordify/') }}images/img_1.jpg" alt="your image" style="width:150px; height:200px; background-color:#eeeeee;" />
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
                           <td class="col-sm-8 col-xs-8"></td>
                       </tr>
                       <tr>
                           <th class="col-sm-4 col-xs-4">KK</th>
                           <td class="col-sm-8 col-xs-8"></td>
                       </tr>
                       <tr>
                           <th class="col-sm-4 col-xs-4">BPJS</th>
                           <td class="col-sm-8 col-xs-8"></td>
                       </tr>
                       <tr>
                           <th class="col-sm-4 col-xs-4">KTP</th>
                           <td class="col-sm-8 col-xs-8"></td>
                       </tr>
                       <tr>
                           <th class="col-sm-4 col-xs-4">KTP Wali</th>
                           <td class="col-sm-8 col-xs-8"></td>
                       </tr>
                       <tr>
                           <th class="col-sm-4 col-xs-4">KTP Ayah</th>
                           <td class="col-sm-8 col-xs-8"></td>
                       </tr>
                       <tr>
                           <th class="col-sm-4 col-xs-4">KTP Ibu</th>
                           <td class="col-sm-8 col-xs-8"></td>
                       </tr>
                       <tr>
                           <th class="col-sm-4 col-xs-4">Ijazah</th>
                           <td class="col-sm-8 col-xs-8"></td>
                       </tr>
                       <tr>
                           <th class="col-sm-4 col-xs-4">SKHUN</th>
                           <td class="col-sm-8 col-xs-8"></td>
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

{{-- INI HARUS ADA DISEMUA LAYOUT SUPAYA BIAR BISA DI KLIK DROPDOWNNYA --}}
@section('scripts')
<!-- jQuery -->
<script src="{{ base_url('assets/sb-admin/') }}js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ base_url('assets/sb-admin/') }}js/bootstrap.min.js"></script>
@stop