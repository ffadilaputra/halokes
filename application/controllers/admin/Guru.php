<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->authenticate();
    }

    public function index()
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['guru'] = GuruModel::all();

        $this->view('admin.pages.guru.index', $data);
    }

    public function create($id = NULL)
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        if($id){
            $data['user'] = UsersModel::all();
            $data['edit'] = GuruModel::find($id);
            $this->view('admin.pages.guru.edit',$data);
        }else{
            $data['user'] = UsersModel::all();
            $this->view('admin.pages.guru.create',$data);
        }
    }

    public function store()
    {
        $data['cek'] = GuruModel::where(['id_users' => $_POST['id_users']])->first();
        if(isset($data['cek'])){
            echo 'Guru sudah terdaftar dalam sistem';
        }else{
            GuruModel::create($this->input->post());
            redirect('admin/guru');
        }
    }

    public function update($id)
    {
        GuruModel::find($id)->update($this->input->post());
        redirect('admin/guru');
    }

    public function delete($id)
    {
        GuruModel::destroy($id);
        redirect('admin/guru');
    }
}

?>


