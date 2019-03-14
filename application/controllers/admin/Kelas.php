<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends MY_Controller {

    public function index()
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['kelas'] = KelasModel::all();
        $this->view('admin.pages.kelas.index', $data);
    }

    public function create($id = NULL)
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        if($id){
            $data['guru'] = GuruModel::all();
            $data['edit'] = KelasModel::find($id);
            $this->view('admin.pages.kelas.edit',$data);
        }else{
            $data['guru'] = GuruModel::all();
            $this->view('admin.pages.kelas.create',$data);
        }
    }

    public function store()
    {
        KelasModel::create($this->input->post());
        redirect('admin/kelas');
    }

    public function update($id)
    {
        KelasModel::find($id)->update($this->input->post());
        redirect('admin/kelas');
    }

    public function delete($id)
    {
        KelasModel::destroy($id);
        redirect('admin/kelas');
    }
}

?>
