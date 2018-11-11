<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Santri extends MY_Controller {

      public function index(){
          $this->view('front.page.ppdb_register');
      }

      public function store(){
        $this->load->model('SantriModel');
        $this->validate($this->input->post(), [
          'nis' => 'required|numeric',
          'nama_lengkap' => 'required|string',
          'panggilan' => 'required|string',
          'nik' => 'required|numeric',
          'tempat_lahir' => 'required|string',
          'tgl_lahir' => 'required',
          'alamat' => 'required|string',
          'kelurahan' => 'required|string',
          'kecamatan' => 'required|string',
          'kota' => 'required|string',
          'provinsi' => 'required|string',
          'kode_pos' => 'required',
          'telepon' => 'required',
          ]);

          $id_santri = 'STR' . random_string('alnum', 5) . date('my');
          $_POST['id_santri'] = $id_santri;
          SantriModel::create($this->input->post());
          redirect('main');
      }
  }
?>
