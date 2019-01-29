<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Dashboard extends MY_Controller {

    public function index(){
      $this->autenthicateAdmin();
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $data['santri'] = SantriModel::where([
        'status_verifikasi' => 'terverifikasi'
      ])->get()->count();
      $data['post'] = BeritaModel::where([
        'id_news_category' => 'berita'
      ])->get()->count();
      $data['tanggungan'] = TanggunganPembayaranModel::count();

      $this->view('admin.pages.dashboard',$data);
    }

}
?>
