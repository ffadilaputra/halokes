<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Main extends MY_Controller {

    public function index(){

      $data['article'] = BeritaModel::where([
        'id_news_category' => 'berita'
      ])->limit(9)->get();

      $data['footer'] = BeritaModel::where([
        'id_news_category' => 'berita'
      ])->limit(3)->get();

      $this->view('front.wpage.main',$data);
    }
}
?>
