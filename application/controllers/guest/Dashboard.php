<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->authenticateGuest();
    }

    public function index()
    {
        $data['admin'] = $this->session->userdata('admin_wali_logged_in');
        $this->view('guest.pages.dashboard', $data);
    }
}
?>
