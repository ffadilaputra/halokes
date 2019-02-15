<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Verify extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->authenticate();
    }

    public function index()
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $this->view('admin.santri.verifed', $data);
        // redirect('admin/santri');
    }

    public function show($id)
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['santri'] = SantriModel::find($id);
        $this->view('admin.pages.santri.verification', $data);
    }

    public function submit()
    {
        $this->validate($this->input->post(), [
            'status' => 'required'
        ]);
        VerifikasiModel::create($this->input->post());
        redirect('admin/santri');
    }
}
?>
