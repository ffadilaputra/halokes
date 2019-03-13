<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Matpel extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->authenticate();
    }

    public function index()
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['matpel'] = MatpelModel::all();

        $this->view('admin.pages.matpel.index', $data);
    }

    public function create($id = NULL)
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        if($id){
            $data['edit'] = MatpelModel::find($id);
            $this->view('admin.pages.matpel.edit',$data);
        }else{
            $this->view('admin.pages.matpel.create',$data);
        }
    }

    public function store()
    {
        MatpelModel::create($this->input->post());
        redirect('admin/matpel');
    }

    public function update($id)
    {
        MatpelModel::find($id)->update($this->input->post());
        redirect('admin/matpel');
    }

    public function delete($id)
    {
        MatpelModel::destroy($id);
        redirect('admin/matpel');
    }
}

?>