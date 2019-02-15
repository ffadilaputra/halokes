<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Tanggungan extends MY_Controller {

    public function __construct() {
      parent::__construct();
      $this->authenticate();
    }

    public function index(){
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $data['list'] = TanggunganPembayaranModel::orderBy('created_at','desc')->get();
      $this->view('admin.pages.tanggungan.index',$data);
    }

    public function create(){
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $data['santri'] = SantriModel::all();
      $data['tahun'] = TahunAkademikModel::all();
      $data['kategori'] = KategoriKeuanganModel::all();
      $this->view('admin.pages.tanggungan.create',$data);
    }

    public function store(){
      $this->validate($this->input->post(),[
        'nominal' => 'required',
      ]);
      TanggunganPembayaranModel::create($this->input->post());
      redirect('admin/tanggungan');
    }

    public function edit($id){
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $data['santri'] = SantriModel::all();
      $data['tahun'] = TahunAkademikModel::all();
      $data['kategori'] = KategoriKeuanganModel::all();
      $data['edit'] = TanggunganPembayaranModel::find($id);
      $this->view('admin.pages.tanggungan.edit',$data);
    }

    public function update($id){
      TanggunganPembayaranModel::find($id)->update($this->input->post());
      redirect('admin/tanggungan');
    }

    public function delete($id){
      TanggunganPembayaranModel::destroy($id);
      redirect('admin/tanggungan');
    }

}
?>
