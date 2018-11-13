<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Provesi extends MY_Controller {

    public function index(){
      $this->autenthicateAdmin();
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $data['list'] = ProvesiModel::all();
      $this->view('admin.pages.provesi.index',$data);
    }

    public function create(){
      $this->autenthicateAdmin();
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $this->view('admin.pages.provesi.create',$data);
    }

    public function store(){
      $this->validate($this->input->post(),[
        'provesi' => 'required',
      ]);
      ProvesiModel::create($this->input->post());
      // var_dump($_POST);
      redirect('admin/provesi');
    }

    public function edit($id){
      $this->autenthicateAdmin();
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $data['edit'] = ProvesiModel::find($id);
      $this->view('admin.pages.provesi.edit',$data);
    }

    public function update($id){
      $this->validate($this->input->post(),[
        'provesi' => 'required',
      ]);
      ProvesiModel::find($id)->update($this->input->post());
      redirect('admin/provesi');
    }

    public function delete($id){
      ProvesiModel::destroy($id);
      redirect('admin/provesi');
    }

}
?>
