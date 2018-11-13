<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {

    public function index(){
        $this->view('front.page.register');
    }
}
