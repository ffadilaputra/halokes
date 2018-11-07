<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Verify extends MY_Controller {

  public function index(){
        $this->autenthicateAdmin();
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $this->view('admin.santri.verifed',$data);
   // redirect('admin/santri');
  }

   public function show($id){
      $this->load->model('SantriModel');

      $this->autenthicateAdmin();
      $data['admin'] = $this->session->userdata('admin_logged_in');

      $data['santri'] = SantriModel::find($id);
      $this->view('admin.pages.santri.verification',$data);
   }

   public function submit(){
      $this->load->model('VerifikasiModel');
      $this->validate($this->input->post(),[
        'status' => 'required',
      ]);
      VerifikasiModel::create($this->input->post());
      var_dump($_POST);

   }

}
?>
