<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lembaga extends MY_Controller {

    public function index()
    {
      $data['footer'] = BeritaModel::where([
        'id_news_category' => 'berita'
      ])->limit(3)->get();

      $this->view('front.wpage.lembaga.mts',$data);
    }

    public function ma()
    {
        $data['footer'] = BeritaModel::where([
          'id_news_category' => 'berita'
        ])->limit(3)->get();
        $this->view('front.wpage.lembaga.ma',$data);
    }

    public function tpq()
    {
        $data['footer'] = BeritaModel::where([
          'id_news_category' => 'berita'
        ])->limit(3)->get();
        $this->view('front.wpage.lembaga.tpq',$data);
    }

    public function madin()
    {
        $data['footer'] = BeritaModel::where([
          'id_news_category' => 'berita'
        ])->limit(3)->get();
        $this->view('front.wpage.lembaga.madin',$data);
    }

    public function majlis()
    {
        $data['footer'] = BeritaModel::where([
          'id_news_category' => 'berita'
        ])->limit(3)->get();
        $this->view('front.wpage.lembaga.majlis',$data);
    }

    public function koppontren()
    {
        $data['footer'] = BeritaModel::where([
          'id_news_category' => 'berita'
        ])->limit(3)->get();
        $this->view('front.wpage.lembaga.koppontren',$data);
    }

}

/* End of file Controllername.php */

?>
