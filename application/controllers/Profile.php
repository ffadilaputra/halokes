<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MY_Controller {

    public function index()
    {
      $data['sidebar'] = BeritaModel::where([
        'id_news_category' => 'berita'
      ])->limit(6)->get();

        $this->view('front.wpage.profile.sejarah', $data);
    }

    public function fasilitas()
    {
      $data['sidebar'] = BeritaModel::where([
        'id_news_category' => 'berita'
      ])->limit(6)->get();

        $this->view('front.wpage.profile.fasilitas', $data);
    }

    public function kegiatan()
    {
      $data['sidebar'] = BeritaModel::where([
        'id_news_category' => 'berita'
      ])->limit(6)->get();

        $this->view('front.wpage.profile.kegiatan', $data);
    }

    public function kajian()
    {
      $data['sidebar'] = BeritaModel::where([
        'id_news_category' => 'berita'
      ])->limit(6)->get();

        $this->view('front.wpage.profile.kajian', $data);
    }
    public function alumni()
    {
      $data['sidebar'] = BeritaModel::where([
        'id_news_category' => 'berita'
      ])->limit(6)->get();

        $this->view('front.wpage.profile.alumni', $data);
    }

}

/* End of file Controllername.php */

?>
