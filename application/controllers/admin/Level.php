<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Level extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->authenticate();
    }

    public function index()
    {
        $data['list'] = LevelModel::all();
        $this->autenthicateAdmin();
        $data['admin'] = $this->session->userdata('admin_logged_in');

        $this->view('admin.pages.level.index', $data);
    }

    public function create()
    {
        $data['modul'] = ModulModel::all();
        $data['admin'] = $this->session->userdata('admin_logged_in');

        $this->view('admin.pages.level.create', $data);
    }

    public function store()
    {
        $this->validate($this->input->post(), [
            'nama_level' => 'required'
        ]);
        $level = LevelModel::create($this->input->post());

        foreach ($this->input->post('id_modul') as $row) {
            AksesModel::create([
                'id_level' => $level->id_level,
                'id_modul' => $row
            ]);
        }
        redirect('admin/level');
    }

    public function edit($id)
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['edit'] = LevelModel::find($id);
        $data['modul'] = ModulModel::all();

        $data['level_akses'] = array_map(function ($item) {
            return $item['id_modul'];
        }, $data['edit']->akses->toArray());

        $this->view('admin.pages.level.edit', $data);
    }

    public function update($id)
    {
        $this->validate($this->input->post(), [
            'nama_level' => 'required'
        ]);
        LevelModel::find($id)->update($this->input->post());

        AksesModel::where('id_level', $id)->delete();
        foreach ($this->input->post('id_modul') as $row) {
            AksesModel::create([
                'id_level' => $id,
                'id_modul' => $row
            ]);
        }
        redirect('admin/level');
    }

    public function delete($id)
    {
        LevelModel::destroy($id);
        AksesModel::where(['id_level' => $id])->delete();
    }
}
?>
