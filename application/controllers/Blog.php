<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Blog extends MY_Controller {

    public function index(){
      $this->view('front.wpage.blog-single');
    }
}
?>
