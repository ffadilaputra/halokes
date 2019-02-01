<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Informasi extends MY_Controller {

    public function index($offset = 0){

      $data['pagination'] = $this->paginate(
        BeritaModel::where([
          'id_news_category' => 'berita'
        ])->get(),
        9,
        base_url('main/index')
      );

      $data['article'] = BeritaModel::where([
        'id_news_category' => 'berita'
      ])->offset($offset)->limit(9)->get();
      $this->view('front.wpage.informasi',$data);
    }

    public function mauidhoh($offset = 0){

      $data['pagination'] = $this->paginate(
        BeritaModel::where([
          'id_news_category' => 'mauidhoh'
        ])->get(),
        10,
        base_url('informasi/mauidhoh')
      );

      $data['article'] = BeritaModel::where([
        'id_news_category' => 'mauidhoh'
      ])->offset($offset)->limit(10)->get();
      $this->view('front.wpage.mauidhoh',$data);
    }

}
?>
