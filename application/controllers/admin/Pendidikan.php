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
      $this->view('admin.pages.pendidikan.index',$data);
    }

    public function create(){
      $this->autenthicateAdmin();
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $this->view('admin.pages.pendidikan.create',$data);
    }

    public function store(){
      $this->validate($this->input->post(),[
        'pendidikan_terakhir' => 'required',
      ]);
      PendidikanModel::create($this->input->post());
      // var_dump($_POST);
      redirect('admin/pendidikan');
    }

    public function edit($id){
      $this->autenthicateAdmin();
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $data['edit'] = PendidikanModel::find($id);
      $this->view('admin.pages.pendidikan.edit',$data);
    }

    public function update($id){
      $this->validate($this->input->post(),[
        'pendidikan_terakhir' => 'required',
      ]);
      PendidikanModel::find($id)->update($this->input->post());
      redirect('admin/pendidikan');
    }

    public function delete($id){
      PendidikanModel::destroy($id);
      redirect('admin/pendidikan');
    }

}
?>
