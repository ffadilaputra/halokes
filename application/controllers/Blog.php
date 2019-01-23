<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Blog extends MY_Controller {

    public function index(){
      $this->view('front.wpage.blog-single');
    }

    public function blog1(){
      $this->view('front.wpage.blog-single');
    }

    public function detail($id){

      $data['footer'] = BeritaModel::where([
        'id_news_category' => 'berita'
      ])->limit(3)->get();

      $data['detail'] = BeritaModel::find($id);
      $this->view('front.wpage.blog-single',$data);
    }
}
?>
