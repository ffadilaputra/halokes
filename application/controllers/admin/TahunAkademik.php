<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class TahunAkademik extends MY_Controller {

    public function __construct() {
      parent::__construct();
      $this->authenticate();
    }

    public function index(){
        $data['list'] = TahunAkademikModel::all();
        $this->autenthicateAdmin();
        $data['admin'] = $this->session->userdata('admin_logged_in');

        $this->view('admin.pages.tahun_akademik.index',$data);
    }

    public function create(){
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $this->view('admin.pages.tahun_akademik.create',$data);
    }

    public function store(){
      $this->validate($this->input->post(),[
        'nama' => 'required',
      ]);
      TahunAkademikModel::create($this->input->post());
      redirect('admin/TahunAkademik');
    }

    public function edit($id){
      $data['edit'] = TahunAkademikModel::find($id);
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $this->view('admin.pages.tahun_akademik.edit',$data);
    }

    public function update($id){
      $this->validate($this->input->post(),[
        'nama' => 'required',
      ]);
      TahunAkademikModel::find($id)->update($this->input->post());
      redirect('admin/TahunAkademik');
    }

    public function delete($id){
      TahunAkademikModel::destroy($id);
      redirect('admin/TahunAkademik');
    }

}
?>
