<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Santri extends MY_Controller {

      public function index(){
          $this->view('front.page.ppdb_register');
      }

      public function store(){

        $this->load->model('SantriModel');

        $this->validate($this->input->post(), [
          'id_santri' => 'required|string',
          'nis' => 'required|string',
          'nama_lengkap' => 'required|string',
          'panggilan' => 'required|string',
          'nik' => 'required|string',
          'tempat_lahir' => 'required|string',
          'tgl_lahir' => 'required|date',
          'alamat' => 'required|string',
          'kelurahan' => 'required|string',
          'kecamatan' => 'required|string',
          'kota' => 'required|string',
          'provinsi' => 'required|string',
          'kode_pos' => 'required|string',
          'telepon' => 'required|string',
          ]);

          SantriModel::create($this->input->post());
          redirect('main');
      }
  }
?>
