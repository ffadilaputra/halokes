<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('UsersModel');
      }

    public function index(){
       $this->view('admin.pages.auth.login');
    }

    public function loginProcess() {
        $this->validate($this->input->post(), [
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6'
        ]);
        $user = $this->getUser();
        $this->authenticateUser($user);
    }

    public function getUser() {
        return UsersModel::where([
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password'))
        ])->first();
    }

    public function authenticateUser($user) {
        if (!is_null($user)) {
            $this->session->set_userdata('user', $user);
            redirect(base_url());
        } else {
            $validation = $this->validator->make([], []);
            $validation->errors()->add('password', 'the password is invalid');
            $this->session->set_flashdata('errors', $validation->errors());
            $this->session->set_flashdata('old', $this->input->post());
            redirect(base_url('Login'));
        }
    }

}
