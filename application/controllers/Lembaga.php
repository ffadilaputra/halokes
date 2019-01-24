<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lembaga extends MY_Controller {

    public function index()
    {
      $data['sidebar'] = BeritaModel::where([
        'id_news_category' => 'berita'
      ])->limit(6)->get();

        $this->view('front.wpage.lembaga.mts', $data);
    }

    public function ma()
    {
      $data['sidebar'] = BeritaModel::where([
        'id_news_category' => 'berita'
      ])->limit(6)->get();

        $this->view('front.wpage.lembaga.ma', $data);
    }

    public function tpq()
    {
      $data['sidebar'] = BeritaModel::where([
        'id_news_category' => 'berita'
      ])->limit(6)->get();

        $this->view('front.wpage.lembaga.tpq', $data);
    }

    public function madin()
    {
      $data['sidebar'] = BeritaModel::where([
        'id_news_category' => 'berita'
      ])->limit(6)->get();

        $this->view('front.wpage.lembaga.madin', $data);
    }

    public function majlis()
    {
      $data['sidebar'] = BeritaModel::where([
        'id_news_category' => 'berita'
      ])->limit(6)->get();

        $this->view('front.wpage.lembaga.majlis', $data);
    }

    public function koppontren()
    {
      $data['sidebar'] = BeritaModel::where([
        'id_news_category' => 'berita'
      ])->limit(6)->get();

        $this->view('front.wpage.lembaga.koppontren', $data);
    }

}
?>
