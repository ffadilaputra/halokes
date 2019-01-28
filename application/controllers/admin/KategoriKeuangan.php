<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class KategoriKeuangan extends MY_Controller {

    public function index(){
        $data['list'] = KategoriKeuanganModel::all();
        $this->autenthicateAdmin();
        $data['admin'] = $this->session->userdata('admin_logged_in');

        $this->view('admin.pages.kategori.keuangan.index',$data);
    }

    public function create(){
      $this->autenthicateAdmin();
      $data['admin'] = $this->session->userdata('admin_logged_in');

      $this->view('admin.pages.kategori.keuangan.create',$data);
    }

    public function store(){
      $this->validate($this->input->post(),[
        'nama' => 'required',
      ]);
      KategoriKeuanganModel::create($this->input->post());
      redirect('admin/KategoriKeuangan');
    }

    public function edit($id){
      $data['edit'] = KategoriKeuanganModel::find($id);
      $this->autenthicateAdmin();
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $this->view('admin.pages.kategori.keuangan.edit',$data);
    }

    public function update($id){
      $this->validate($this->input->post(),[
        'nama' => 'required',
      ]);
      KategoriKeuanganModel::find($id)->update($this->input->post());
      redirect('admin/KategoriKeuangan');
    }

    public function delete($id){
      KategoriKeuanganModel::destroy($id);
      redirect('admin/KategoriKeuangan');
    }

}
?>
