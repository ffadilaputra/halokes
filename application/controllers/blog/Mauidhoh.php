<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mauidhoh extends MY_Controller {

    public function index()
    {
      $data['info'] = BeritaModel::orderBy('created_at', 'desc')->get();
      $this->view('front.page.info.mauidhoh', $data);
    }

    public function detail()
    {
      $this->view('front.page.info.detail');
    }

}

/* End of file Controllername.php */

?>
