<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Level extends MY_Controller {

    public function index(){
        $data['list'] = LevelModel::all();
        $this->autenthicateAdmin();
        $data['admin'] = $this->session->userdata('admin_logged_in');

        $this->view('admin.pages.level.index',$data);
    }

    public function create(){
      $this->autenthicateAdmin();
      $data['admin'] = $this->session->userdata('admin_logged_in');

      $this->view('admin.pages.level.create',$data);
    }

    public function store(){
      $this->validate($this->input->post(),[
        'level' => 'required',
      ]);
      LevelModel::create($this->input->post());
      redirect('admin/level');
    }

    public function edit($id){
      $data['edit'] = LevelModel::find($id);
      $this->autenthicateAdmin();
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $this->view('admin.pages.level.edit',$data);
    }

    public function update($id){
      $this->validate($this->input->post(),[
        'level' => 'required',
      ]);
      LevelModel::find($id)->update($this->input->post());
      redirect('admin/level');
    }

    public function delete($id){
      LevelModel::destroy($id);
    }

}
?>
