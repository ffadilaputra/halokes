<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Santri extends MY_Controller {

    public function index(){
        $this->autenthicateAdmin();
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['santri'] = SantriModel::where([
          'status_verifikasi'=> 'belum_verifikasi'
        ])->get();
        $this->view('admin.pages.santri.index',$data);
    }

    public function show($id){
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $data['santri'] = SantriModel::find($id);
      $this->view('admin.pages.santri.show',$data);
    }

    public function all(){
      $this->autenthicateAdmin();
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $data['santri'] = SantriModel::all();
      $this->view('admin.pages.santri.verifed',$data);
    }

    public function verify($id){
      $this->autenthicateAdmin();
      $data['admin'] = $this->session->userdata('admin_logged_in');
      SantriModel::find($id)->update(['status_verifikasi'=> 'terverifikasi']);
      redirect('admin/santri/all');
      }

    }


?>
