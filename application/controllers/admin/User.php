<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class User extends MY_Controller {

    public function __construct() {
      parent::__construct();
      $this->authenticate();
    }

    public function index(){
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['list'] = UsersModel::all();
        $this->view('admin.pages.user.index',$data);
    }

    public function create(){
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['level'] = LevelModel::all();
        $this->view('admin.pages.user.create',$data);
    }

    public function store(){
      $this->validate($this->input->post(),[
        'nama_lengkap' => 'required',
        'tempat_lahir' => 'required',
        'telepon' => 'required',
        'email' => 'required',
        'password'=> 'required',
        'id_level' => 'required',
      ]);
      $id_user = 'USR' . random_string('alnum', 5) . date('my');
      $_POST['id_users'] = $id_user;
      $_POST['password'] = md5($_POST['password']);
      $_POST['id_alamat'] = 0;
      UsersModel::create($this->input->post());
      redirect('admin/user');
    }

    public function show($id){
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $data['user'] = UsersModel::find($id);
      $this->view('admin.pages.user.show',$data);
    }

    public function edit($id){
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $data['level'] = LevelModel::all();
      $data['user'] = UsersModel::find($id);
      $this->view('admin.pages.user.edit',$data);
    }

    public function update($id){
        $_POST['password'] = md5($_POST['password']);
        UsersModel::find($id)->update($this->input->post());
        redirect('admin/user');
    }

    public function delete($id){
        UsersModel::destroy($id);
    }

}
?>
