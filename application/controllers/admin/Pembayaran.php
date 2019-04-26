<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->authenticate();
    }

    public function index()
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['santri'] = PembayaranModel::all();
        $this->view('admin.pages.pembayaran.index', $data);
    }

    public function create()
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['santri'] = SantriModel::all();
        $this->view('admin.pages.pembayaran.create', $data);
    }

    public function store()
    {
        $this->validate($this->input->post(), [
            'id_santri' => 'required',
            'status_pembayaran' => 'required',
            'bukti_pembayaran' => 'mimes:jpeg,bmp,png'
        ]);
        $generate = 'PBR' . random_string('alnum', 5) . date('my');
        $_POST['kode_pembayaran'] = $generate;
        if (!empty($_FILES['bukti_pembayaran']['name'])) {
            $_POST['bukti_pembayaran'] = $this->do_upload(
                'bukti_pembayaran',
                'assets/uploads/',
                'image',
                true
            );
        }
        PembayaranModel::create($this->input->post());
        redirect('admin/pembayaran');
    }

    public function show($id)
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['santri'] = PembayaranModel::find($id);
        $this->view('admin.pages.pembayaran.show', $data);
    }

    public function edit($id)
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['santri'] = PembayaranModel::find($id);
        $this->view('admin.pages.pembayaran.edit', $data);
    }

    public function update($id)
    {
        $this->validate($this->input->post(), [
            'status_pembayaran' => 'required',
            'bukti_pembayaran' => 'mimes:jpeg,bmp,png'
        ]);
        if (!empty($_FILES['bukti_pembayaran']['name'])) {
            $_POST['bukti_pembayaran'] = $this->do_upload(
                'bukti_pembayaran',
                'assets/uploads/',
                'image',
                true
            );
            $pembayaran = PembayaranModel::find($id);
            unlink('assets/uploads/' . $data->bukti_pembayaran);
        }
        PembayaranModel::find($id)->update($this->input->post());
        redirect('admin/pembayaran');
    }

    public function delete($id)
    {
        $data = PembayaranModel::find($id);
        unlink('assets/uploads/' . $data->bukti_pembayaran);
        PembayaranModel::destroy($id);
        redirect('admin/pembayaran');
    }

    public function nota($id)
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['tanggungan'] = TanggunganPembayaranModel::where([
            'id_santri' => $id
        ])->first();
        $data['list'] = TanggunganPembayaranModel::where([
            'id_santri' => $id
        ])->get();
        $data['keuangan'] = KategoriKeuanganModel::all();
        $this->view('admin.pages.pembayaran.preview_nota', $data);
    }

    public function spp(){
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['spp'] = SppModel::all();
        $this->view('admin.pages.spp.index',$data);
    }

    public function spp_create($id = NULL){
        $data['admin'] = $this->session->userdata('admin_logged_in');
        if($id){
            $data['edit'] = SppModel::find($id);
            $data['santri'] = SantriModel::all();
            $data['kelas'] = KelasModel::all();
            $this->view('admin.pages.spp.edit',$data);
        }else{
            $data['santri'] = SantriModel::all();
            $data['kelas'] = KelasModel::all();
            $this->view('admin.pages.spp.create',$data);
        }
    }

    public function spp_store(){
        SppModel::create($this->input->post());
        redirect('admin/pembayaran/spp');
    }

    public function spp_update($id){
        SppModel::find($id)->update($this->input->post());
        redirect('admin/pembayaran/spp');
    }

    public function spp_delete($id){
        SppModel::destroy($id);
        redirect('admin/pembayaran/spp');
    }

}
