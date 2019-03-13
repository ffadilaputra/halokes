<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Jurusan extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->authenticate();
    }

    public function index()
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['jurusan'] = JurusanModel::all();

        $this->view('admin.pages.jurusan.index', $data);
    }

    public function create($id = NULL)
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        if($id){
            $data['edit'] = JurusanModel::find($id);
            $this->view('admin.pages.jurusan.edit',$data);
        }else{
            $this->view('admin.pages.jurusan.create',$data);
        }
    }

    public function show($id)
    {

    }

    public function store()
    {
        JurusanModel::create($this->input->post());
        redirect('admin/jurusan');
    }

    public function update($id)
    {
        JurusanModel::find($id)->update($this->input->post());
        redirect('admin/jurusan');
    }

    public function delete($id)
    {
        JurusanModel::destroy($id);
        redirect('admin/jurusan');
    }
}

?>


