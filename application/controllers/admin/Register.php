<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('UsersModel');
      }

    public function index(){
        $this->view('front.page.register');
    }

 
}
