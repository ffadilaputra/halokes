<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends MY_Controller {

    public function index(){
        $this->autenthicateAdmin();
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $this->view('admin.pages.pembayaran.index',$data);
    }

    public function create(){
        $this->load->model('SantriModel');

        $this->autenthicateAdmin();
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['santri'] = SantriModel::all();
        $this->view('admin.pages.pembayaran.create',$data);
    }

}
