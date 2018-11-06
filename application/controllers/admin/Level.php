<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Level extends MY_Controller {

    public function __construct(){
      parent::__construct();
      $this->load->model('LevelModel');
    }

    public function index(){
        $data['list'] = LevelModel::all();
        $this->view('admin.pages.level.index',$data);
    }

    public function create(){
      $this->view('admin.pages.level.create');
    }

    public function store(){
      $this->validate($this->input->post(),[
        'level' => 'required',
      ]);
      LevelModel::create($this->input->post());
      var_dump($_POST);
    }

    public function edit($id){
      $data['edit'] = LevelModel::find($id);
      $this->view('admin.pages.level.edit',$data);
    }

    public function update($id){
      $this->validate($this->input->post(),[
        'level' => 'required',
      ]);
      LevelModel::find($id)->update($this->input->post());
    }

    public function delete($id){
      LevelModel::destroy($id);
    }

}
?>
