<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sample extends MY_Controller {

    public function index() {
      $this->view('admin.pages.dashboard');
	}
}
