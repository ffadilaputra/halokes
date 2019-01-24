<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Santri extends MY_Controller {

      public function index(){
        $data['footer'] = BeritaModel::where([
          'id_news_category' => 'berita'
        ])->limit(3)->get();
          $this->view('front.page.ppdb_register_new', $data);
      }

      public function store(){
        // $this->validate($this->input->post(), [

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

           $pendidikan = array(
             'nama_sekolah_siswa' => $this->input->post('nama_sekolah_siswa'),
             'jenis_sekolah_siswa' => $this->input->post('jenis_sekolah_siswa'),
             'status_sekolah_siswa' => $this->input->post('status_sekolah_siswa'),
             'alamat_sekolah_siswa' => $this->input->post('alamat_sekolah_siswa'),
             'provinsi_siswa' => $this->input->post('provinsi_siswa'),
             'nss' => $this->input->post('nss_siswa'),
             'npsn' => $this->input->post('npsn_siswa'),
             'no_seri_ijazah' => $this->input->post('no_ijazah_siswa'),
             'no_seri_skhun' => $this->input->post('skhun_siswa'),
             'no_peserta_ujian' => $this->input->post('no_un_siswa'),
             'id_siswa' => $id_santri,
           );

          if(!empty($_FILES['foto_santri']['name'])){
            $_POST['foto_santri'] = $this->do_upload('foto_santri', 'assets/uploads', 'image', TRUE);
          }

          if(!empty($_FILES['foto_wali_santri']['name'])){
            $_POST['foto_wali_santri'] = $this->do_upload('foto_wali_santri', 'assets/uploads', 'image', TRUE);
          }

          if(!empty($_FILES['foto_ayah_santri']['name'])){
            $_POST['foto_ayah_santri'] = $this->do_upload('foto_ayah_santri', 'assets/uploads', 'image', TRUE);
          }

          if(!empty($_FILES['foto_ibu_santri']['name'])){
            $_POST['foto_ibu_santri'] = $this->do_upload('foto_ibu_santri', 'assets/uploads', 'image', TRUE);
          }

          if(!empty($_FILES['akta_santri']['name'])){
            $_POST['akta_santri'] = $this->do_upload('akta_santri', 'assets/uploads', 'image', TRUE);
          }

          if(!empty($_FILES['kk_santri']['name'])){
            $_POST['kk_santri'] = $this->do_upload('kk_santri', 'assets/uploads', 'image', TRUE);
          }

          if(!empty($_FILES['bpjs_santri']['name'])){
            $_POST['bpjs_santri'] = $this->do_upload('bpjs_santri', 'assets/uploads', 'image', TRUE);
          }

          if(!empty($_FILES['ktp_santri']['name'])){
            $_POST['ktp_santri'] = $this->do_upload('ktp_santri', 'assets/uploads', 'image', TRUE);
          }

          if(!empty($_FILES['ktp_wali']['name'])){
            $_POST['ktp_wali'] = $this->do_upload('ktp_wali', 'assets/uploads', 'image', TRUE);
          }

          if(!empty($_FILES['ktp_ayah']['name'])){
            $_POST['ktp_ayah'] = $this->do_upload('ktp_ayah', 'assets/uploads', 'image', TRUE);
          }

          if(!empty($_FILES['ktp_ibu']['name'])){
            $_POST['ktp_ibu'] = $this->do_upload('ktp_ibu', 'assets/uploads', 'image', TRUE);
          }

          if(!empty($_FILES['ijazah_santri']['name'])){
            $_POST['ijazah_santri'] = $this->do_upload('ijazah_santri', 'assets/uploads', 'image', TRUE);
          }

          if(!empty($_FILES['skhun_santri']['name'])){
            $_POST['skhun_santri'] = $this->do_upload('skhun_santri', 'assets/uploads', 'image', TRUE);
          }

          $berkas = array('foto_santri' => $this->input->post('foto_santri'),
            'foto_wali_santri' => $this->input->post('foto_wali_santri'),
            'foto_ayah_santri' => $this->input->post('foto_ayah_santri') ,
            'foto_ibu_santri' => $this->input->post('foto_ibu_santri'),
            'akta_santri' => $this->input->post('akta_santri'),
            'kk_santri' => $this->input->post('kk_santri'),
            'bpjs_santri' => $this->input->post('bpjs_santri'),
            'ktp_santri' => $this->input->post('ktp_santri'),
            'ktp_wali' => $this->input->post('ktp_wali'),
            'ktp_ayah' => $this->input->post('ktp_ayah'),
            'ktp_ibu' => $this->input->post('ktp_ibu'),
            'ijazah_santri' => $this->input->post('no_ijazah_siswa'),
            'skhun_santri' => $this->input->post('skhun_santri'),
            'id_santri' => $id_santri
          );

          SantriModel::create($santri);
          AyahModel::create($ayah);
          IbuModel::create($ibu);
          WaliModel::create($wali);
          PendidikanTerakhirModel::create($pendidikan);
          BerkasSantriModel::create($berkas);
          redirect('ppdb/santri/sukses');
      }

      public function sukses(){
        $this->view('front.wpage.success');
      }

      public function preview(){
        $this->view('front.page.ppdb_preview');
      }

      public function edit(){
        $this->view('front.page.ppdb_edit');
      }
  }
?>
