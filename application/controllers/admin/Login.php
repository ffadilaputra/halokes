<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $this->view('front.page.login');
    }

    public function login_process()
    {
        //$this->redirectIfAuthenticated('admin', 'admin/beranda');

        $this->validate($this->input->post(), [
            'email' => 'required',
            'password' => 'required|string'
        ]);

        $admin = UsersModel::with('level.akses.modul')
            ->where([
                'email' => $this->input->post('email')
            ])
            ->first();

        if ($admin->password == md5($this->input->post('password'))) {
            $this->session->set_userdata('admin_logged_in', $admin);
            redirect(base_url('admin'));
        } else {
            $validation = $this->validator->make([], []);
            $validation->errors()->add('password', 'the password is invalid');
            $this->session->set_flashdata('errors', $validation->errors());
            $this->session->set_flashdata('old', $this->input->post());
            redirect(base_url('admin/login'));
        }
    }
    public function logoutProcess()
    {
        unset($_SESSION['admin_logged_in']);
        redirect(base_url('admin/login'));
    }
}
