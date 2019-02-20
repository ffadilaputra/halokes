<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Berkas extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->authenticate();
    }

    public function index()
    {
        $data['santri'] = SantriModel::where([
            'status_verifikasi' => 'belum_verifikasi'
        ])->get();
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $this->view('admin.pages.kelengkapan.index', $data);
    }

    public function create()
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $this->view('admin.pages.level.create', $data);
    }

    public function parents($id = null)
    {
        if (isset($id)) {
            $data['parents'] = IbuModel::where(['id_santri' => $id])->first();
            $data['ayah'] = AyahModel::where(['id_santri' => $id])->first();
            $data['wali'] = WaliModel::where(['id_santri' => $id])->first();
            if (isset($data['parents'])) {
                $data['admin'] = $this->session->userdata('admin_logged_in');
                $this->view('admin.pages.kelengkapan.parents', $data);
            } else {
                echo 'santri belum mengisi berkas orang tua/wali';
            }
        }
    }

    public function education($id = null)
    {
        if ($id) {
            $data['edu'] = PendidikanTerakhirModel::where([
                'id_siswa' => $id
            ])->first();
            if (isset($data['edu'])) {
                $data['admin'] = $this->session->userdata('admin_logged_in');
                $this->view('admin.pages.kelengkapan.education', $data);
            } else {
                echo 'santri belum mengisi pendidikan terakhir';
            }
        }
    }

    public function archive($id)
    {
        if (isset($id)) {
            $data['santri'] = SantriModel::where(['id_santri' => $id])->first();
            $data['ibu'] = IbuModel::where(['id_santri' => $id])->first();
            $data['ayah'] = AyahModel::where(['id_santri' => $id])->first();
            $data['wali'] = WaliModel::where(['id_santri' => $id])->first();
            $data['archive'] = BerkasSantriModel::where([
                'id_santri' => $id
            ])->first();
            if (isset($data['archive'])) {
                $data['admin'] = $this->session->userdata('admin_logged_in');
                $this->view('admin.pages.kelengkapan.archive', $data);
            } else {
                echo 'santri belum mengisi kelengkapan berkas';
            }
        }
    }

    public function santri($id)
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['santri'] = SantriModel::where(['id_santri' => $id])->first();
        $this->view('admin.pages.kelengkapan.show_santri', $data);
    }

    public function delete($id)
    {
        SantriModel::destroy($id);
        redirect('admin/berkas');
    }
}

?>
