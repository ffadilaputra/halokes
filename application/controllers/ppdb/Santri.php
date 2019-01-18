<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Santri extends MY_Controller {

      public function index(){
          $this->view('front.page.ppdb_register_new');
      }

      public function store(){
        // $this->validate($this->input->post(), [
        //   'no_induk' => 'required|numeric',
        //   'nisn' => 'required|numeric',
        //   'nama_lengkap' => 'required|string',
        //   'nama_panggilan' => 'required',
        //   'nik' => 'required|string',
        //   'no_kk' => 'required|string',
        //   'tempat_lahir_siswa' => 'required|string',
        //   'tgl_siswa' => 'required|numeric',
        //   'bulan_siswa' => 'required|numeric',
        //   'tahun_siswa' => 'required|numeric',
        //   'jenis_kelamin' => 'required',
        //   'status_keluarga' => 'required',
        //   'anak_ke' => 'required',
        //   'jml_sdr' => 'required',
        //   'no_kip' => 'required|numeric',
        //   'no_bpjs' => 'required|numeric',
        //   'no_jamkes' => 'required|numeric',
        //   'hobi' => 'required',
        //   'cita_cita' => 'required',
        //   'keb_khusus' => 'required',

        //   'nama_sekolah_siswa' => 'required|string',
        //   'jenis_sekolah_siswa' => 'required|string',
        //   'alamat_sekolah_siswa' => 'required|string',
        //   'kabkota_siswa' => 'required|string',
        //   'provinsi_siswa' => 'required|string',

        //   'nss_siswa' => 'required',
        //   'npsn_siswa' => 'required',
        //   'no_ijazah_siswa' => 'required',
        //   'skhun_siswa' => 'required',
        //   'no_un_siswa' => 'required',

        //   'nama_ayah_siswa' => 'required|string',
        //   'napang_ayah_siswa' => 'required|string',
        //   'nik_ayah_siswa' => 'required|string',
        //   'tempat_lahir_ayah' => 'required',
        //   'tgl_ayah' => 'required|numeric',
        //   'bulan_ayah' => 'required|numeric',
        //   'tahun_ayah' => 'required|numeric',
        //   'hbgn_ayah_santri' => 'required',
        //   'status_ayah_santri' => 'required',
        //   'alamat_ayah' => 'required',
        //   'kabkota_ayah' => 'required',
        //   'provinsi_ayah' => 'required',
        //   'kodepos_ayah' => 'required',
        //   'telepon_ayah' => 'required',
        //   'pendidikan_terakhir_ayah' => 'required',
        //   'pekerjaan_ayah' => 'required',
        //   'penghasilan_ayah' => 'required',

        //   'nama_ibu_siswa' => 'required|string',
        //   'napang_ibu_siswa' => 'required|string',
        //   'nik_ibu_siswa' => 'required|string',
        //   'tempat_lahir_ibu' => 'required',
        //   'tgl_ibu' => 'required|numeric',
        //   'bulan_ibu' => 'required|numeric',
        //   'tahun_ibu' => 'required|numeric',
        //   'hbgn_ibu_santri' => 'required',
        //   'status_ibu_santri' => 'required',
        //   'alamat_ibu' => 'required',
        //   'kabkota_ibu' => 'required',
        //   'provinsi_ibu' => 'required',
        //   'kodepos_ibu' => 'required',
        //   'telepon_ibu' => 'required',
        //   'pendidikan_terakhir_ibu' => 'required',
        //   'pekerjaan_ibu' => 'required',
        //   'penghasilan_ibu' => 'required',

        //   'nama_wali_siswa' => 'required|string',
        //   'napang_wali_siswa' => 'required|string',
        //   'nik_wali_siswa' => 'required|string',
        //   'tempat_lahir_wali' => 'required',
        //   'tgl_wali' => 'required|numeric',
        //   'bulan_wali' => 'required|numeric',
        //   'tahun_wali' => 'required|numeric',
        //   'hbgn_wali_santri' => 'required',
        //   'status_wali_santri' => 'required',
        //   'alamat_wali' => 'required',
        //   'kabkota_wali' => 'required',
        //   'provinsi_wali' => 'required',
        //   'kodepos_wali' => 'required',
        //   'telepon_wali' => 'required',
        //   'pendidikan_terakhir_wali' => 'required',
        //   'pekerjaan_wali' => 'required',
        //   'penghasilan_wali' => 'required',
        //   ]);

          $id_santri = 'STR'.random_string('alnum', 5).date('my');
          $tgl_siswa = $this->input->post('tgl_siswa');
          $bln_santri = $this->input->post('bulan_siswa');
          $thn_santri = $this->input->post('tahun_siswa');
          $tgl_santri = $thn_santri.':'.$bln_santri.':'.$tgl_siswa;

          $tgl_ayah = $this->input->post('tgl_ayah');
          $bln_ayah = $this->input->post('bulan_ayah');
          $thn_ayah = $this->input->post('tahun_ayah');
          $tgl_lahir_ayah = $thn_ayah.':'.$bln_ayah.':'.$tgl_ayah;

          $tgl_ibu = $this->input->post('tgl_ibu');
          $bln_ibu = $this->input->post('bulan_ibu');
          $thn_ibu = $this->input->post('tahun_ibu');
          $tgl_lahir_ibu = $thn_ibu.':'.$bln_ibu.':'.$tgl_ibu;

          $tgl_wali = $this->input->post('tgl_wali');
          $bln_wali = $this->input->post('bulan_wali');
          $thn_wali = $this->input->post('tahun_wali');
          $tgl_lahir_wali = $thn_wali.':'.$bln_wali.':'.$tgl_wali;

          $santri = array(
           'id_santri' => $id_santri,
           'tingkat_pendidikan' => $this->input->post('tingkat_pendidikan'),
           'jenis_siswa'=> $this->input->post('jenis_siswa'),
           'nisn' => $this->input->post('jenis_siswa'),
           'nama_lengkap' => $this->input->post('nama_lengkap'),
           'panggilan' => $this->input->post('nama_panggilan'),
           'nik' => $this->input->post('nik'),
           'no_induk' => $this->input->post('nisn'),
           'no_kk' => $this->input->post('no_kk'),
           'tempat_lahir' => $this->input->post('tempat_lahir_siswa'),
           'tgl_lahir' => $tgl_santri,
           'kota' => $this->input->post('kota'),
           'jenis_kelamin' => $this->input->post('jenis_kelamin'),
           'status_keluarga' => $this->input->post('status_keluarga'),
           'anak_ke' => $this->input->post('anak_ke'),
           'jml_saudara' => $this->input->post('jml_sdr'),
           'no_kip' => $this->input->post('no_kip'),
           'no_bpjs' => $this->input->post('no_bpjs'),
           'no_jamkes' => $this->input->post('no_jamkes'),
           'hobi' => $this->input->post('hobi'),
           'cita_cita' => $this->input->post('cita_cita'),
           'kebutuhan_khusus' => $this->input->post('keb_khusus')
          );

          $ayah = array(
            'nama_lengkap' => $this->input->post('nama_ayah_siswa'),
            'panggilan' => $this->input->post('napang_ayah_siswa'),
            'nik' => $this->input->post('nik_ayah_siswa'),
            'tempat_lahir' => $this->input->post('tempat_lahir_ayah'),
            'tgl_lahir' => $tgl_lahir_ayah,
            'hbgn_ayah_santri' => $this->input->post('hbgn_ayah_santri'),
            'status_ayah' => $this->input->post('status_ayah_santri'),
            'alamat' => $this->input->post('alamat_ayah'),
            'kota' => $this->input->post('kabkota_ayah'),
            'provinsi' => $this->input->post('provinsi_ayah'),
            'kode_pos' => $this->input->post('kodepos_ayah'),
            'telepon' => $this->input->post('telepon_ayah'),
            'pendidikan' => $this->input->post('pendidikan_terakhir_ayah'),
            'pekerjaan' => $this->input->post('pekerjaan_ayah'),
            'penghasilan' => $this->input->post('penghasilan_ayah'),
            'id_santri' => $id_santri,
           );

           $ibu = array(
            'nama_lengkap' => $this->input->post('nama_ibu_siswa'),
            'panggilan' => $this->input->post('napang_ibu_siswa'),
            'nik' => $this->input->post('nik_ibu_siswa'),
            'tempat_lahir' => $this->input->post('tempat_lahir_ibu'),
            'tgl_lahir' => $tgl_lahir_ibu,
            'hbgn_ibu_santri' => $this->input->post('hbgn_ibu_santri'),
            'status_ibu' => $this->input->post('status_ibu_santri'),
            'alamat' => $this->input->post('alamat_ibu'),
            'kota' => $this->input->post('kabkota_ibu'),
            'provinsi' => $this->input->post('provinsi_ibu'),
            'kode_pos' => $this->input->post('kodepos_ibu'),
            'telepon' => $this->input->post('telepon_ibu'),
            'pendidikan' => $this->input->post('pendidikan_terakhir_ibu'),
            'pekerjaan' => $this->input->post('pekerjaan_ibu'),
            'penghasilan' => $this->input->post('penghasilan_ibu'),
            'id_santri' => $id_santri,
           );

           $wali = array(
            'nama_lengkap' => $this->input->post('nama_wali_siswa'),
            'panggilan' => $this->input->post('napang_wali_siswa'),
            'nik' => $this->input->post('nik_wali_siswa'),
            'tempat_lahir' => $this->input->post('tempat_lahir_wali'),
            'tgl_lahir' => $tgl_lahir_wali,
            'hbgn_wali_santri' => $this->input->post('hbgn_wali_santri'),
            'status_wali' => $this->input->post('status_wali_santri'),
            'alamat' => $this->input->post('alamat_wali'),
            'kota' => $this->input->post('kabkota_wali'),
            'provinsi' => $this->input->post('provinsi_wali'),
            'kode_pos' => $this->input->post('kodepos_wali'),
            'telepon' => $this->input->post('telepon_wali'),
            'pendidikan' => $this->input->post('pendidikan_terakhir_wali'),
            'pekerjaan' => $this->input->post('pekerjaan_wali'),
            'penghasilan' => $this->input->post('penghasilan_wali'),
            'id_santri' => $id_santri,
           );
          SantriModel::create($santri);
          AyahModel::create($ayah);
          IbuModel::create($ibu);
          WaliModel::create($wali);

          var_dump($_POST);
          //redirect('main');
      }
  }
?>
