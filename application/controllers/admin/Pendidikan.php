<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pendidikan extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->authenticate();
    }

    public function pendidikan_edit($id)
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['edit'] = PendidikanTerakhirModel::where([
            'id_siswa' => $id
        ])->first();
        $this->view('admin.pages.kelengkapan.edit_pendidikan', $data);
    }

    public function pendidikan_update($id)
    {
        PendidikanTerakhirModel::where(['id_siswa' => $id])->update(
            $this->input->post()
        );
        redirect('admin/pendidikan/pendidikan_edit/' . $id);
    }
}
?>
