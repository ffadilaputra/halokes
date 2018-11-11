<?php

defined('BASEPATH') OR exit('No direct script access allowed');

    class Berita extends MY_Controller{

        public function index(){
            $this->autenthicateAdmin();
            $data['admin'] = $this->session->userdata('admin_logged_in');
            $data['post'] = BeritaModel::all();

            $this->view('admin.pages.berita.index',$data);
        }

        public function create(){
            $this->autenthicateAdmin();
            $data['admin'] = $this->session->userdata('admin_logged_in');
            $data['category'] = KategoriBeritaModel::all();

            $this->view('admin.pages.berita.create',$data);
        }

        public function show($id){
            $data['admin'] = $this->session->userdata('admin_logged_in');
            $data['post'] = BeritaModel::find($id);
            $this->view('admin.pages.berita.show',$data);
        }

        public function store(){
            $this->autenthicateAdmin();
            $data['admin'] = $this->session->userdata('admin_logged_in');
            $this->validate($this->input->post(),[
                'title' => 'required',
                'description' => 'required',
              ]);
            $_POST['posted_by'] = $data['admin']->id_users;
            BeritaModel::create($this->input->post());
            redirect('admin/berita');
        }

        public function edit($id){
            $this->autenthicateAdmin();
            $data['admin'] = $this->session->userdata('admin_logged_in');
            $data['edit'] = BeritaModel::find($id);
            $data['category'] = KategoriBeritaModel::all();
            $this->view('admin.pages.berita.edit',$data);
        }

          public function update($id){
            $this->validate($this->input->post(),[
              'title' => 'required',
              'description' => 'required'
            ]);
            BeritaModel::find($id)->update($this->input->post());
            redirect('admin/berita');
        }

          public function delete($id){
            BeritaModel::destroy($id);
            redirect('admin/berita');
        }

    }

?>