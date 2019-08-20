<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AkunSantri extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->authenticate();
    }

    public function index(){
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['guest'] = GuestModel::all();

        $this->view('admin.pages.santri.akun', $data);
    }
}
?>
