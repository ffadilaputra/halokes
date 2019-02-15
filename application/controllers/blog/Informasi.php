<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi extends MY_Controller
{
    public function index()
    {
        $data['info'] = BeritaModel::orderBy('created_at', 'desc')->get();
        $this->view('front.page.info.informasi', $data);
    }

    public function show($id)
    {
        $data['info'] = BeritaModel::find($id);
        $this->view('front.page.info.detail_info', $data);
    }
}

/* End of file Controllername.php */

?>
