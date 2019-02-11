<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mauidhoh extends MY_Controller
{
    public function index()
    {
        $data['mauidhoh'] = MauidhohModel::orderBy('created_at', 'desc')->get();
        $this->view('front.page.info.mauidhoh', $data);
    }

    public function show($id)
    {
        $data['mauidhoh'] = MauidhohModel::find($id);
        $this->view('front.page.info.detail_mauidhoh', $data);
    }
}

/* End of file Controllername.php */

?>
