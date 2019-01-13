<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lembaga extends MY_Controller {

    public function index()
    {
        $this->view('front.wpage.lembaga.mts');
    }

    public function ma()
    {
        $this->view('front.wpage.lembaga.ma');
    }
    
    public function tpq()
    {
        $this->view('front.wpage.lembaga.tpq');
    }

    public function madin()
    {
        $this->view('front.wpage.lembaga.madin');
    }
    
    public function majlis()
    {
        $this->view('front.wpage.lembaga.majlis');
    }

    public function koppontren()
    {
        $this->view('front.wpage.lembaga.koppontren');
    }

}

/* End of file Controllername.php */

?>