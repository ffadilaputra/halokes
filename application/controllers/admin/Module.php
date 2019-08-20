<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Module extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        //$this->authenticate();
    }

    public function index()
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['module'] = ModulModel::all();

        $this->view('admin.pages.module.index', $data);
    }

    public function create($id = NULL)
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        if($id){
            $data['edit'] = ModulModel::find($id);
            $this->view('admin.pages.module.edit',$data);
        }else{
            $this->view('admin.pages.module.create',$data);
        }
    }

    public function store()
    {
        ModulModel::create($this->input->post());
        redirect('admin/module');
    }

    public function update($id)
    {
        ModulModel::find($id)->update($this->input->post());
        redirect('admin/module');
    }

    public function delete($id)
    {
        ModulModel::destroy($id);
        redirect('admin/module');
    }
}

?>