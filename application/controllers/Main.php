<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Main extends MY_Controller {

    public function index(){
        $data['post'] = BeritaModel::latest()->take(9)->get();
        $this->view('front.page.main',$data);
    }
}
?>
