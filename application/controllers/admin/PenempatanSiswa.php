<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PenempatanSiswa extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->authenticate();
    }

    public function index()
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['ps'] = PenempatanSiswaModel::all();
        $this->view('admin.pages.penempatan_siswa.index', $data);
    }

    public function create($id = NULL)
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        if($id){
            $data['edit'] = PenempatanSiswaModel::find($id);
            $data['kelas'] = KelasModel::all();
            $data['santri'] = SantriModel::all();
            $this->view('admin.pages.penempatan_siswa.edit',$data);
        }else{
            $data['kelas'] = KelasModel::all();
            $data['santri'] = SantriModel::all();
            $this->view('admin.pages.penempatan_siswa.create',$data);
        }
    }

    public function store()
    {
        PenempatanSiswaModel::create($this->input->post());
        redirect('admin/PenempatanSiswa');
    }

    public function update($id)
    {
        PenempatanSiswaModel::find($id)->update($this->input->post());
        redirect('admin/PenempatanSiswa');
    }

    public function delete($id)
    {
        PenempatanSiswaModel::destroy($id);
        redirect('admin/PenempatanSiswa');
    }
}

?>