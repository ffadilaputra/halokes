<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends MY_Controller {

  public function __construct(){
    parent::__construct();
    $this->authenticate();
  }

  public function index() {
    $data['admin'] = $this->session->userdata('admin_logged_in');
    $data['list'] = PengumumanModel::all();
    $this->view('admin.pages.pengumuman.index',$data);
  }

  public function create($id=NULL){
    $data['admin'] = $this->session->userdata('admin_logged_in');
    if($id){
      $data['peng'] = PengumumanModel::find($id);
      $this->view('admin.pages.pengumuman.edit',$data);
    }else{
      $this->view('admin.pages.pengumuman.create',$data);
    }
  }
  public function store(){
    PengumumanModel::create($this->input->post());
    redirect('admin/pengumuman');
  }

  public function update($id){
    PengumumanModel::find($id)->update($this->input->post());
    redirect('admin/pengumuman');
  }

  public function delete($id){
    PengumumanModel::destroy($id);
    redirect('admin/pengumuman');
  }

}
