<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MY_Controller {

    public function index()
    {
        $this->view('front.wpage.profile.sejarah');
    }

    public function fasilitas()
    {
        $this->view('front.wpage.profile.fasilitas');
    }
    
    public function kegiatan()
    {
        $this->view('front.wpage.profile.kegiatan');
    }

    public function kajian()
    {
        $this->view('front.wpage.profile.kajian');
    }
    public function alumni()
    {
        $this->view('front.wpage.profile.alumni');
    }

}

/* End of file Controllername.php */

?>