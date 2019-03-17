<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MatpelKelas extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->authenticate();
    }

    public function index()
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['matpel'] = MatpelKelasModel::all();
        $this->view('admin.pages.matpelkelas.index', $data);
    }

    public function create($id = NULL)
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        if($id){
            $data['guru'] = GuruModel::all();
            $data['jurusan'] = JurusanModel::all();
            $data['kelas'] = KelasModel::all();
            $data['edit'] = MatpelKelasModel::find($id);
            $this->view('admin.pages.matpelkelas.edit',$data);
        }else{
            $data['guru'] = GuruModel::all();
            $data['jurusan'] = JurusanModel::all();
            $data['kelas'] = KelasModel::all();
            $this->view('admin.pages.matpelkelas.create',$data);
        }
    }

    public function store()
    {
        MatpelKelasModel::create($this->input->post());
        redirect('admin/MatpelKelas');
    }

    public function update($id)
    {
        MatpelKelasModel::find($id)->update($this->input->post());
        redirect('admin/MatpelKelas');
    }

    public function delete($id)
    {
        MatpelKelasModel::destroy($id);
        redirect('admin/MatpelKelas');
    }
}

?>