<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Santri extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->authenticateGuest();
    }

    public function index()
    {
        $data['admin'] = $this->session->userdata('admin_wali_logged_in');
        $id = $this->session->userdata('admin_wali_logged_in')->id_santri;
        $data['santri'] = SantriModel::where([
            'id_santri' => $id
        ])->first();

        $this->view('guest.pages.biodata', $data);
    }

    public function pembayaran()
    {
        $data['admin'] = $this->session->userdata('admin_wali_logged_in');
        $id = $this->session->userdata('admin_wali_logged_in')->id_santri;
        $data['laporanangsuran'] = KategoriKeuanganModel::where(['nama' => 'Pangkal'])->get();
        $data['angsuran'] = AngsuranModel::where(['id_santri' => $id])->get();
        $data['spp'] = SppModel::where(['id_santri' => $id])->get();

        $this->view('guest.pages.pembayaran', $data);
    }
}
?>
