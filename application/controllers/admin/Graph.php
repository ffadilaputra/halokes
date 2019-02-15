<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Graph extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->authenticate();
    }

    public function index()
    {

    }
}
?>
