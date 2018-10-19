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

    public function showById($id){
      return SantriModel::find($id);
    }

    public function show($id){
      $data['santri'] = $this->showById($id);
      $this->view('admin.pages.santri.show',$data);
    }

}
?>
