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
      $data['santri'] = SantriModel::where([
        'status_verifikasi' => 'terverifikasi'
      ])->get();
      $this->view('admin.pages.santri.verifed',$data);
    }
    public function ma(){
      $this->autenthicateAdmin();
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $data['santri'] = SantriModel::all();
      $this->view('admin.pages.santri.ma',$data);
    }

    public function mts(){
      $this->autenthicateAdmin();
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $data['santri'] = SantriModel::all();
      $this->view('admin.pages.santri.mts',$data);
    }
    
    public function md(){
      $this->autenthicateAdmin();
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $data['santri'] = SantriModel::all();
      $this->view('admin.pages.santri.md',$data);
    }

    public function verify($id){
      $this->autenthicateAdmin();
      $data['admin'] = $this->session->userdata('admin_logged_in');
      SantriModel::find($id)->update(['status_verifikasi'=> 'terverifikasi']);
      redirect('admin/santri/all');
      }

    public function print($id){
      $this->autenthicateAdmin();
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $data['santri'] = SantriModel::find($id);
      $data['date_now'] = longdate_indo(date("Y-m-d"));
      $this->view('admin.pages.santri.cetak_va',$data);
    }



    }


?>
