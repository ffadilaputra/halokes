<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Santri extends MY_Controller {

    public function __construct(){
      parent::__construct();
      $this->load->model('SantriModel');
    }

    public function index(){
        $data['santri'] = SantriModel::all();
        $this->view('admin.pages.santri.index',$data);
    }

    public function show($id){
      $data['santri'] = SantriModel::find($id);
      $this->view('admin.pages.santri.show',$data);
    }

}
?>
