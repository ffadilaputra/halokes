<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kelompok extends MY_Controller {

    public function index()
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['kelompok'] = KelompokModel_A::all();
        $this->view('admin.pages.kelompok.index', $data);
    }

    public function create_a(){
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['matpel'] = MatpelKelasModel::all();
        $this->view('admin.pages.kelompok.create_a', $data);
    }

}

?>
