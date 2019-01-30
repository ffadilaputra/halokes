<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Galeri extends MY_Controller {

    public function index(){

      $data['footer'] = BeritaModel::where([
        'id_news_category' => 'berita'
      ])->limit(3)->get();

      $this->view('front.wpage.galeri',$data);
    }
}
?>
