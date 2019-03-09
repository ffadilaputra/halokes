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
        ])->get()->count();
        $data['post'] = BeritaModel::where([
            'id_news_category' => 'berita'
        ])->get()->count();
        $data['tanggungan'] = TanggunganPembayaranModel::count();

        $data['mt'] = SantriModel::where([
            'jenis_siswa' => 'baru',
            'tingkat_pendidikan' => 'mt'
        ])->get()->count();

        $data['ma'] = SantriModel::where([
            'jenis_siswa' => 'baru',
            'tingkat_pendidikan' => 'ma'
        ])->get()->count();

        $data['md'] = SantriModel::where([
            'jenis_siswa' => 'baru',
            'tingkat_pendidikan' => 'md'
        ])->get()->count();

        $data['ma_putra'] = SantriModel::where([
            'tingkat_pendidikan' => 'ma',
            'jenis_kelamin' => 'laki-laki',
            'status_verifikasi' => 'terverifikasi'
        ])->get()->count();

        $data['mt_putra'] = SantriModel::where([
            'tingkat_pendidikan' => 'mt',
            'jenis_kelamin' => 'laki-laki',
            'status_verifikasi' => 'terverifikasi'
        ])->get()->count();

        $data['mt_putri'] = SantriModel::where([
            'tingkat_pendidikan' => 'mt',
            'jenis_kelamin' => 'perempuan',
            'status_verifikasi' => 'terverifikasi'
        ])->get()->count();

        $data['ma_putri'] = SantriModel::where([
            'tingkat_pendidikan' => 'ma',
            'jenis_kelamin' => 'perempuan',
            'status_verifikasi' => 'terverifikasi'
        ])->get()->count();

        $data['lunas'] = TanggunganPembayaranModel::whereRaw('tanggungan_pembayaran.nominal >= tanggungan_pembayaran.biaya_harusdibayar')->get()->count();
        $data['belum_lunas'] = TanggunganPembayaranModel::whereRaw('tanggungan_pembayaran.nominal < tanggungan_pembayaran.biaya_harusdibayar')->get()->count();


        $data['belum_aktif'] = SantriModel::where([
            'status_verifikasi' => 'belum_verifikasi'
        ])->get()->count();

        //Statistik Santri Lama & Baru
        $data['year'] = date("Y");
        $data['hitung_santri_lama'] = SantriModel::whereYear('created_at', '=', $data['year'])->where(['jenis_siswa'=> 'lama'] )->get()->count();
        $data['hitung_santri_baru'] = SantriModel::whereYear('created_at', '=', $data['year'])->where(['jenis_siswa'=> 'baru'] )->get()->count();
        $data['santri_statistic'] = json_encode($data['hitung_santri_lama']);
        $data['santri_statistic_new'] = json_encode($data['hitung_santri_baru']);

        $this->view('admin.pages.dashboard', $data);
    }

    public function denied()
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['denied'] = 'Anda tidak diperbolehkan mengakses laman ini';
        $this->view('admin.pages.denied', $data);
    }

}
?>
