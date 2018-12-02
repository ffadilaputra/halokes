<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends MY_Controller {

    public function index()
    {
      $data['info'] = BeritaModel::orderBy('created_at', 'desc')->get();
      $this->view('front.page.info.informasi', $data);
    }

}

/* End of file Controllername.php */

?>
