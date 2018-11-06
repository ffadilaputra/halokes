<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class KategoriBerita extends MY_Controller {

    public function __construct(){
      parent::__construct();
      $this->load->model('KategoriBeritaModel');
    }

    public function index(){
        $this->autenthicateAdmin();
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['list'] = KategoriBeritaModel::all();
        $this->view('admin.pages.berita.kategori.index',$data);
    }

    public function create(){
        $this->autenthicateAdmin();
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $this->view('admin.pages.berita.kategori.create',$data);
    }

    public function store(){
      $this->validate($this->input->post(),[
        'category_name' => 'required',
      ]);
      KategoriBeritaModel::create($this->input->post());
      var_dump($_POST);
    }

    public function edit($id){
        $this->autenthicateAdmin();
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['edit'] = KategoriBeritaModel::find($id);
        $this->view('admin.pages.berita.kategori..edit',$data);
    }

    public function update($id){
      $this->validate($this->input->post(),[
        'category_name' => 'required',
      ]);
      KategoriBeritaModel::find($id)->update($this->input->post());
      redirect('admin/kategoriberita');
    }

    public function delete($id){
        KategoriBeritaModel::destroy($id);
    }

}
?>
