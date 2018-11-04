<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Dashboard extends MY_Controller {

    public function index(){
      $this->autenthicateAdmin();
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $this->view('admin.pages.dashboard',$data);
    }

}
?>
