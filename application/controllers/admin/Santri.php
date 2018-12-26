<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Santri extends MY_Controller {

    public function index(){
        $this->autenthicateAdmin();
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['santri'] = SantriModel::get();
        $this->view('admin.pages.santri.index',$data);
    }

    public function show($id){
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $data['santri'] = SantriModel::find($id);
      $this->view('admin.pages.santri.show',$data);
    }

    public function all(){
      $this->autenthicateAdmin();
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $data['santri'] = SantriModel::get();
      $this->view('admin.pages.santri.verifed',$data);
    }

    public function verifed(){
      $this->autenthicateAdmin();
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $data['santri'] = VerifikasiModel::get()->where('status','terima');
      $this->view('admin.pages.santri.verifed_santri',$data);
    }

}
?>
