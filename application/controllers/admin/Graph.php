<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Graph extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['santri'] = SantriModel::all();
        $data['santri_statisic'] = json_encode($data['santri']);
        //echo $data['santri_statisic'];
        $this->view('admin.pages.dashboard.index',$data);
    }
}
?>
