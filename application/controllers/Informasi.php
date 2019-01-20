<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Informasi extends MY_Controller {

    public function index(){

      $data['article'] = BeritaModel::where([
        'id_news_category' => 'berita'
      ])->limit(9)->get();


      $this->view('front.wpage.informasi',$data);
    }
}
?>
