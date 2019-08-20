<?php

defined('BASEPATH') or exit('No direct script access allowed');

class GenerateLogin extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->authenticate();
    }

    public function index(){
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $merge_santri = array();
        $data['santri'] = SantriModel::where([
          'status_verifikasi' => 'terverifikasi'
          ])->get();

        $this->view('admin.pages.santri.generate', $data);
    }

    public function store()
    {
        foreach ($this->input->post('id_santri') as $row) {
          $santri = SantriModel::where([
              'id_santri' => $row
          ])->first();

          $date = new DateTime($santri->tgl_lahir);
          $password = $date->format('Ymd').strtoupper(substr($santri->nama_lengkap, 0, 2));

            GuestModel::create([
                'no_virtual_account' => $santri->virtualAkun->no_virtual_account,
                'password' => md5($password),
                'id_santri' => $row
            ]);
        }
        redirect('admin/AkunSantri');
    }

}
?>
