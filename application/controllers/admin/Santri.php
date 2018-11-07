<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Santri extends MY_Controller {

    public function __construct(){
      parent::__construct();
      $this->load->model('SantriModel');
      $this->load->model('VerifikasiModel');
    }

    public function index(){
        $this->autenthicateAdmin();
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['santri'] = SantriModel::all();
        $this->view('admin.pages.santri.index',$data);
    }

    public function show($id){
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $data['santri'] = SantriModel::find($id);
      $this->view('admin.pages.santri.show',$data);
    }

    public function all(){
      $data['santri'] = VerifikasiModel::get();
      $this->view('admin.pages.santri.verifed',$data);
    }

    public function verifed(){
      $data['santri'] = VerifikasiModel::get()->where('status','terima');
      $this->view('admin.pages.santri.verifed',$data);
    }

}
?>
