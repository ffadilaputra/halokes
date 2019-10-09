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
    public function operator(){
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['list'] = UsersModel::all();
        $this->view('admin.pages.user.operator',$data);
    }

    public function create(){
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $this->view('admin.pages.user.create',$data);
    }

    public function createOperator(){
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['list'] = UsersModel::all();
        $data['level'] = LevelModel::all();
        $this->view('admin.pages.user.create_operator',$data);
    }

    public function store(){
      $this->validate($this->input->post(),[
        'nama_lengkap' => 'required',
        'tempat_lahir' => 'required',
        'telepon' => 'required',
        'email' => 'required',
      ]);
      $_POST['id_users'] = random_string('alnum', 8) . date('my');

      if (!empty($_FILES['foto']['name'])) {
          $_POST['foto'] = $this->do_upload(
              'foto',
              'assets/uploads/pegawai/',
              'image',
              true
          );
      }

      UsersModel::create($this->input->post());
      redirect('admin/user');
    }

    public function storeOperator(){
      $this->validate($this->input->post(),[
        'password'=> 'required',
        'id_level' => 'required',
      ]);
      $id = $this->input->post('id_users');
      $_POST['password'] = md5($_POST['password']);
      UsersModel::find($id)->update($this->input->post());
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
        if (!empty($_FILES['foto']['name'])) {
          $_POST['foto'] = $this->do_upload(
              'foto',
              'assets/uploads/',
              'image',
              true
          );
        }
        UsersModel::find($id)->update($this->input->post());
        redirect('admin/user');
    }

    public function delete($id){
        UsersModel::destroy($id);
    }

}
?>
