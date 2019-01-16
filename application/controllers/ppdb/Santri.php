<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Santri extends MY_Controller {

      public function index(){
          $this->view('front.page.ppdb_register_new');
      }

      public function store(){
        $this->validate($this->input->post(), [
          'tingkat_pendidikanalamat' => 'required|string',
          'jenis_siswa' => 'required',
          'no_induk' => 'required|numeric',
          'nisn' => 'required|numeric',
          'nama_lengkap' => 'required|string',
          'nama_panggilan' => 'required',
          'nik' => 'required|string',
          'no_kk' => 'required|string',
          'tempat_lahir_siswa' => 'required|string',
          'tgl_siswa' => 'required|numeric',
          'bulan_siswa' => 'required|numeric',
          'tahun_siswa' => 'required|numeric',
          'jenis_kelamin' => 'required',
          'status_keluarga' => 'required',
          'anak_ke' => 'required',
          'jml_sdr' => 'required',
          'no_kip' => 'required|numeric',
          'no_bpjs' => 'requialamatred|numeric',
          'no_jamkes' => 'required|numeric',
          'hobi' => 'required',
          'cita_cita' => 'required',
          'keb_khusus' => 'required',

          'nama_sekolah_siswa' => 'required|string',
          'jenis_sekolah_siswa' => 'required|string',
          'alamat_sekolah_siswa' => 'required|string',
          'kabkota_siswa' => 'required|string',
          'provinsi_siswa' => 'required|string',

          'nss_siswa' => 'required',
          'npsn_siswa' => 'required',
          'no_ijazah_siswa' => 'required',
          'skhun_siswa' => 'required',
          'no_un_siswa' => 'required',

          'nama_ayah_siswa' => 'required|string',
          'napang_ayah_siswa' => 'required|string',
          'nik_ayah_siswa' => 'required|string',
          'tempat_lahir_ayah' => 'required',
          'tgl_ayah' => 'required|numeric',
          'bulan_ayah' => 'required|numeric',
          'tahun_ayah' => 'required|numeric',
          'hbgn_ayah_santri' => 'required',
          'status_ayah_santri' => 'required',
          'alamat_ayah' => 'required',
          'kabkota_ayah' => 'required',
          'provinsi_ayah' => 'required',
          'kodepos_ayah' => 'required',
          'telepon_ayah' => 'required',
          'pendidikan_terakhir_ayah' => 'required',
          'pekerjaan_ayah' => 'required',
          'penghasilan_ayah' => 'required',

          'nama_ibu_siswa' => 'required|string',
          'napang_ibu_siswa' => 'required|string',
          'nik_ibu_siswa' => 'required|string',
          'tempat_lahir_ibu' => 'required',
          'tgl_ibu' => 'required|numeric',
          'bulan_ibu' => 'required|numeric',
          'tahun_ibu' => 'required|numeric',
          'hbgn_ibu_santri' => 'required',
          'status_ibu_santri' => 'required',
          'alamat_ibu' => 'required',
          'kabkota_ibu' => 'required',
          'provinsi_ibu' => 'required',
          'kodepos_ibu' => 'required',
          'telepon_ibu' => 'required',
          'pendidikan_terakhir_ibu' => 'required',
          'pekerjaan_ibu' => 'required',
          'penghasilan_ibu' => 'required',

          'nama_wali_siswa' => 'required|string',
          'napang_wali_siswa' => 'required|string',
          'nik_wali_siswa' => 'required|string',
          'tempat_lahir_wali' => 'required',
          'tgl_wali' => 'required|numeric',
          'bulan_wali' => 'required|numeric',
          'tahun_wali' => 'required|numeric',
          'hbgn_wali_santri' => 'required',
          'status_wali_santri' => 'required',
          'alamat_wali' => 'required',
          'kabkota_wali' => 'required',
          'provinsi_wali' => 'required',
          'kodepos_wali' => 'required',
          'telepon_wali' => 'required',
          'pendidikan_terakhir_wali' => 'required',
          'pekerjaan_wali' => 'required',
          'penghasilan_wali' => 'required',

          ]);

          $id_santri = 'STR'.random_string('alnum', 5).date('my');
          $_POST['id_santri'] = $id_santri;

          var_dump($_POST);
          //SantriModel::create($this->input->post());
          //redirect('main');
      }
  }
?>
