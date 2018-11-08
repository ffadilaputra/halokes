<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

    public function __construct(){
        parent::__construct();
      }

    public function index(){
    //    $this->view('admin.pages.auth.login');
        $this->view('front.page.login');
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
        $this->load->model('UsersModel');
        return UsersModel::where([
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password'))
        ])->first();
    }

    public function logoutProcess() {
        unset($_SESSION['admin_logged_in']);
        redirect(base_url('admin/login'));
    }

    public function authenticateUser($user) {
        if (!is_null($user)) {
            $this->session->set_userdata('admin_logged_in', $user);
            redirect(base_url('admin/dashboard'));
        } else {
            $validation = $this->validator->make([], []);
            $validation->errors()->add('password', 'the password is invalid');
            $this->session->set_flashdata('errors', $validation->errors());
            $this->session->set_flashdata('old', $this->input->post());
            redirect('admin/Login');
        }
    }

}
