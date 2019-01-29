<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends MY_Controller {

    public function index(){
        $this->autenthicateAdmin();
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['santri'] = PembayaranModel::all();
        $this->view('admin.pages.pembayaran.index',$data);
    }

    public function create(){
        $this->autenthicateAdmin();
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['santri'] = SantriModel::all();
        $this->view('admin.pages.pembayaran.create',$data);
    }

    public function store(){
        $this->validate($this->input->post(),[
            'id_santri' => 'required',
            'status_pembayaran' => 'required',
            'bukti_pembayaran' => 'mimes:jpeg,bmp,png',
          ]);
        $generate = 'PBR'.random_string('alnum', 5).date('my');
        $_POST['kode_pembayaran'] = $generate;
        if(!empty($_FILES['bukti_pembayaran']['name'])){
            $_POST['bukti_pembayaran'] = $this->do_upload('bukti_pembayaran', 'assets/uploads/', 'image', TRUE);
        }
        PembayaranModel::create($this->input->post());
        redirect('admin/pembayaran');
    }

    public function show($id){
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['santri'] = PembayaranModel::find($id);
        $this->view('admin.pages.pembayaran.show',$data);
    }

    public function edit($id){
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['santri'] = PembayaranModel::find($id);
        $this->view('admin.pages.pembayaran.edit',$data);
    }

    public function update($id){
        $this->validate($this->input->post(),[
            'status_pembayaran' => 'required',
            'bukti_pembayaran' => 'mimes:jpeg,bmp,png',
        ]);
        if(!empty($_FILES['bukti_pembayaran']['name'])){
            $_POST['bukti_pembayaran'] = $this->do_upload('bukti_pembayaran', 'assets/uploads/', 'image', TRUE);
            $pembayaran = PembayaranModel::find($id);
            unlink('assets/uploads/'.$data->bukti_pembayaran);
        }
        PembayaranModel::find($id)->update($this->input->post());
        redirect('admin/pembayaran');
    }

    public function delete($id){
        $data = PembayaranModel::find($id);
        unlink('assets/uploads/'.$data->bukti_pembayaran);
        PembayaranModel::destroy($id);
        redirect('admin/pembayaran');
    }

    public function nota(){
        // $this->autenthicateAdmin();
        // $data['admin'] = $this->session->userdata('admin_logged_in');
        $this->view('admin.pages.pembayaran.preview_nota');
    }

    public function preview(){
        $this->view('admin.pages.pembayaran.preview_va');
    }

    public function cetak(){
        $this->view('admin.pages.pembayaran.cetak_va');
    }

}
