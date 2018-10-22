<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Provesi extends MY_Controller {

    public function __construct(){
      parent::__construct();
      $this->load->model('ProvesiModel');
    }

    public function index(){
      $data['list'] = ProvesiModel::all();
    }

    public function create(){
      $this->view('');
    }

    public function edit($id){
      $data['edit'] = ProvesiModel::find($id);
      $this->view('');
    }

    public function update($id){
      $this->validate($this->input->post(),[

      ]);
      ProvesiModel::find($id)->update($this->input->post());
    }

    public function delete($id){
      ProvesiModel::destroy($id);
    }

}
?>
