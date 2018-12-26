<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Mauidhoh extends MY_Controller {

    public function index(){
      $this->autenthicateAdmin();
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $data['list'] = MauidhohModel::all();
      $this->view('admin.pages.mauidhoh.index',$data);
    }

    public function create(){
        $this->autenthicateAdmin();
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $this->view('admin.pages.mauidhoh.create',$data);
    }

    public function store(){
        $this->validate($this->input->post(),[
            'description' => 'required',
        ]);
        MauidhohModel::create($this->input->post());
        redirect('admin/mauidhoh');
    }

    public function edit($id){
        $this->autenthicateAdmin();
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['data'] = MauidhohModel::findOrFail($id);
        $this->view('admin.pages.mauidhoh.edit',$data);
    }

    public function update($id){
        $this->validate($this->input->post(),[
            'description' => 'required',
        ]);
        MauidhohModel::find($id)->update($this->input->post());
        redirect('admin/mauidhoh');
    }

    public function destroy($id){
        MauidhohModel::destroy($id);
        redirect('admin/mauidhoh');
    }


}
?>
