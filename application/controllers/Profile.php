<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MY_Controller {

    public function index()
    {
        $data['footer'] = BeritaModel::where([
          'id_news_category' => 'berita'
        ])->limit(3)->get();
        $this->view('front.wpage.profile.sejarah',$data);
    }

    public function fasilitas()
    {
        $data['footer'] = BeritaModel::where([
          'id_news_category' => 'berita'
        ])->limit(3)->get();
        $this->view('front.wpage.profile.fasilitas',$data);
    }

    public function kegiatan()
    {
        $data['footer'] = BeritaModel::where([
          'id_news_category' => 'berita'
        ])->limit(3)->get();
        $this->view('front.wpage.profile.kegiatan',$data);
    }

    public function kajian()
    {
        $data['footer'] = BeritaModel::where([
          'id_news_category' => 'berita'
        ])->limit(3)->get();
        $this->view('front.wpage.profile.kajian',$data);
    }
    public function alumni()
    {
        $data['footer'] = BeritaModel::where([
          'id_news_category' => 'berita'
        ])->limit(3)->get();
        $this->view('front.wpage.profile.alumni',$data);
    }

}

/* End of file Controllername.php */

?>
