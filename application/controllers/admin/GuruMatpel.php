<?php

defined('BASEPATH') or exit('No direct script access allowed');

class GuruMatpel extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->authenticate();
    }

    public function index()
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['guru'] = GuruMatpelModel::all();
        $this->view('admin.pages.gurumatpel.index', $data);
    }

    public function show($id){
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['edit'] = GuruMatpelModel::find($id);
        $this->view('admin.pages.gurumatpel.show', $data);
    }

    public function create($id = NULL)
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        if($id){
            $data['guru'] = GuruModel::all();
            $data['kelas'] = KelasModel::all();
            $data['matpel'] = MatpelModel::all();
            $data['users'] = UsersModel::all();
            $data['edit'] = GuruMatpelModel::find($id);
            $this->view('admin.pages.gurumatpel.edit',$data);
        }else{
            $data['guru'] = GuruModel::all();
            $data['kelas'] = KelasModel::all();
            $data['matpel'] = MatpelModel::all();
            $data['user'] = UsersModel::all();
            $this->view('admin.pages.gurumatpel.create',$data);
        }
    }

    public function store()
    {
        GuruMatpelModel::create($this->input->post());
        redirect('admin/GuruMatpel');
   }

    public function update($id)
    {
        GuruMatpelModel::find($id)->update($this->input->post());
        redirect('admin/GuruMatpel');
    }

    public function delete($id)
    {
        GuruMatpelModel::destroy($id);
        redirect('admin/GuruMatpel');
    }
}

?>


