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

        $this->view('guest.pages.login');
    }

    public function loginProcess()
    {
        //$this->redirectIfAuthenticated('admin', 'admin/beranda');

        $this->validate($this->input->post(), [
            'no_virtual_account' => 'required',
            'password' => 'required|string'
        ]);

        $admin = GuestModel::where([
                'no_virtual_account' => $this->input->post('no_virtual_account')
            ])
            ->first();

        if ($admin->password == md5($this->input->post('password'))) {
            $this->session->set_userdata('admin_wali_logged_in', $admin);
            redirect(base_url('guest'));
        } else {
            $validation = $this->validator->make([], []);
            $validation->errors()->add('password', 'the password is invalid');
            $this->session->set_flashdata('errors', $validation->errors());
            $this->session->set_flashdata('old', $this->input->post());
            // redirect(base_url('guest/login'));
        }
    }
    public function logoutProcess()
    {
        unset($_SESSION['admin_wali_logged_in']);
        redirect(base_url('guest/login'));
    }
}
