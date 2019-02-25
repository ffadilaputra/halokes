<?php

defined('BASEPATH') or exit('No direct script access allowed');

class KategoriKeuangan extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->authenticate();
    }

    public function index()
    {
        $data['list'] = KategoriKeuanganModel::all();
        $data['admin'] = $this->session->userdata('admin_logged_in');

        // ini dipake kok
        // $this->view('admin.pages.kategori.keuangan.index', $data);

        // ini buat nampilin chart nyobak dulu
        $this->view('admin.pages.kategori.keuangan.dashboard',$data);
    }

    public function create()
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['thn_akademik'] = TahunAkademikModel::all();
        $this->view('admin.pages.kategori.keuangan.create', $data);
    }

    public function store()
    {
        $this->validate($this->input->post(), [
            'nama' => 'required'
        ]);
        KategoriKeuanganModel::create($this->input->post());
        redirect('admin/KategoriKeuangan');
    }

    public function edit($id)
    {
        $data['edit'] = KategoriKeuanganModel::find($id);
        $data['thn_akademik'] = TahunAkademikModel::all();
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $this->view('admin.pages.kategori.keuangan.edit', $data);
    }

    public function update($id)
    {
        $this->validate($this->input->post(), [
            'nama' => 'required'
        ]);
        KategoriKeuanganModel::find($id)->update($this->input->post());
        redirect('admin/KategoriKeuangan');
    }

    public function delete($id)
    {
        KategoriKeuanganModel::destroy($id);
        redirect('admin/KategoriKeuangan');
    }
}
?>
