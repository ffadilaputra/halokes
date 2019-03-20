<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kelompok extends MY_Controller {

    public function index()
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['kelompok'] = KelompokModel_A::all();
        $data['kelompok_b'] = KelompokModel_B::all();
        $data['kelompok_c'] = KelompokModel_C::all();
        $data['kelompok_d'] = KelompokModel_D::all();
        $data['kelompok_e'] = KelompokModel_E::all();
        $this->view('admin.pages.kelompok.index', $data);
    }

    public function create_a($id= NULL){
        $data['admin'] = $this->session->userdata('admin_logged_in');
        if($id){
            $data['edit'] = KelompokModel_A::find($id);
            $data['matpel'] = MatpelKelasModel::all();
            $this->view('admin.pages.kelompok.edit_a', $data);
        }else{
            $data['matpel'] = MatpelKelasModel::all();
            $this->view('admin.pages.kelompok.create_a', $data);
        }
    }

    public function create_b($id= NULL){
        $data['admin'] = $this->session->userdata('admin_logged_in');
        if($id){
            $data['edit'] = KelompokModel_B::find($id);
            $data['matpel'] = MatpelKelasModel::all();
            $this->view('admin.pages.kelompok.edit_b', $data);
        }else{
            $data['matpel'] = MatpelKelasModel::all();
            $this->view('admin.pages.kelompok.create_b', $data);
        }
    }

    public function create_c($id= NULL){
        $data['admin'] = $this->session->userdata('admin_logged_in');
        if($id){
            $data['edit'] = KelompokModel_C::find($id);
            $data['matpel'] = MatpelKelasModel::all();
            $this->view('admin.pages.kelompok.edit_c', $data);
        }else{
            $data['matpel'] = MatpelKelasModel::all();
            $this->view('admin.pages.kelompok.create_c', $data);
        }
    }

    public function create_d($id= NULL){
        $data['admin'] = $this->session->userdata('admin_logged_in');
        if($id){
            $data['edit'] = KelompokModel_D::find($id);
            $data['matpel'] = MatpelKelasModel::all();
            $this->view('admin.pages.kelompok.edit_d', $data);
        }else{
            $data['matpel'] = MatpelKelasModel::all();
            $this->view('admin.pages.kelompok.create_d', $data);
        }
    }

    public function create_e($id= NULL){
        $data['admin'] = $this->session->userdata('admin_logged_in');
        if($id){
            $data['edit'] = KelompokModel_E::find($id);
            $data['matpel'] = MatpelKelasModel::all();
            $this->view('admin.pages.kelompok.edit_e', $data);
        }else{
            $data['matpel'] = MatpelKelasModel::all();
            $this->view('admin.pages.kelompok.create_e', $data);
        }
    }

    public function store_kelompok_a(){
        KelompokModel_A::create($this->input->post());
        redirect('admin/kelompok');
    }

    public function store_kelompok_b(){
        KelompokModel_B::create($this->input->post());
        redirect('admin/kelompok');
    }

    public function store_kelompok_c(){
        KelompokModel_C::create($this->input->post());
        redirect('admin/kelompok');
    }

    public function store_kelompok_d(){
        KelompokModel_D::create($this->input->post());
        redirect('admin/kelompok');
    }

    public function store_kelompok_e(){
        KelompokModel_E::create($this->input->post());
        redirect('admin/kelompok');
    }

    public function update_kelompok_a($id){
        KelompokModel_A::find($id)->update($this->input->post());
        redirect('admin/kelompok');
    }

    public function update_kelompok_b($id){
        KelompokModel_B::find($id)->update($this->input->post());
        redirect('admin/kelompok');
    }

    public function update_kelompok_c($id){
        KelompokModel_C::find($id)->update($this->input->post());
        redirect('admin/kelompok');
    }

    public function update_kelompok_d($id){
        KelompokModel_D::find($id)->update($this->input->post());
        redirect('admin/kelompok');
    }

    public function update_kelompok_e($id){
        KelompokModel_E::find($id)->update($this->input->post());
        redirect('admin/kelompok');
    }

    public function delete_kelompok_a($id){
        KelompokModel_A::destroy($id);
        redirect('admin/kelompok');
    }

    public function delete_kelompok_b($id){
        KelompokModel_B::destroy($id);
        redirect('admin/kelompok');
    }

    public function delete_kelompok_c($id){
        KelompokModel_C::destroy($id);
        redirect('admin/kelompok');
    }

    public function delete_kelompok_d($id){
        KelompokModel_D::destroy($id);
        redirect('admin/kelompok');
    }

    public function delete_kelompok_e($id){
        KelompokModel_E::destroy($id);
        redirect('admin/kelompok');
    }
}

?>
