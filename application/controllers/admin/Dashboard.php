<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->authenticate();
    }

    public function index()
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['santri'] = SantriModel::where([
            'status_verifikasi' => 'terverifikasi'
        ])
            ->get()
            ->count();
        $data['post'] = BeritaModel::where([
            'id_news_category' => 'berita'
        ])
            ->get()
            ->count();
        $data['tanggungan'] = TanggunganPembayaranModel::count();

        $this->view('admin.pages.dashboard', $data);
        // $data['admin'] = $this->session->userdata('admin_logged_in');
        //$this->view('admin.pages.kategori.keuangan.dashboard',$data);
    }

    public function denied()
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['denied'] = 'Anda tidak diperbolehkan mengakses laman ini';
        $this->view('admin.pages.denied', $data);
    }

}
?>
