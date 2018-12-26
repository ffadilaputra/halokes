<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Main extends MY_Controller {

    public function index(){
      $data['info'] = BeritaModel::limit(6)->orderBy('created_at', 'desc')->get();
      $data['mauidhoh'] = MauidhohModel::latest()->take(9)->get();
      $this->view('front.page.main', $data);
    }
}
?>
