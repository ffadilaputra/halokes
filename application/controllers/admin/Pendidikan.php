<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Pendidikan extends MY_Controller {

    public function __construct(){
      parent::__construct();
      $this->load->model('PendidikanModel');
    }

    public function index(){
      $this->autenthicateAdmin();
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $data['list'] = PendidikanModel::all();
    }

    public function create(){
      $this->view('');
    }

    public function store(){
      $this->validate($this->input->post(),[

      ]);
      PendidikanModel::create($this->input->post());
      var_dump($_POST);
    }

    public function edit($id){
      $data['edit'] = PendidikanModel::find($id);

    }

    public function update($id){
      $this->validate($this->input->post(),[

      ]);
      PendidikanModel::find($id)->update($this->input->post());
    }

    public function delete($id){
      PendidikanModel::destroy($id);
    }

}
?>
