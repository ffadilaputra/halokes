<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Berkas extends MY_Controller {

    public function index(){
        $data['santri'] = SantriModel::all();
        $this->autenthicateAdmin();
        $data['admin'] = $this->session->userdata('admin_logged_in');

        $this->view('admin.pages.kelengkapan.index',$data);
    }

    public function create(){
      $this->autenthicateAdmin();
      $data['admin'] = $this->session->userdata('admin_logged_in');

      $this->view('admin.pages.level.create',$data);
    }

    public function parents($id= NULL){
      $this->autenthicateAdmin();
      if(isset($id)){
        $data['ibu'] = IbuModel::where(['id_santri' => $id])->first();
        if(isset($data['ibu'])){
          echo 'data ada';
        }else{
          echo 'santri belum mengisi berkas orang tua/wali';
        }
        printf($data['ibu']);
      }else {
        echo ':(';
      }
    }

    public function education($id = NULL){
      $this->autenthicateAdmin();
      if($id){
        $data['edu'] = PendidikanTerakhirModel::where(['id_siswa' => $id])->first();
          if(isset($data['edu'])){
            echo 'data ada';
          }else{
            echo 'santri belum mengisi pendidikan terakhir';
          }
        }else {
          echo ':(';
        }
      }

      public function archive($id = NULL){
        $this->autenthicateAdmin();
        if($id){
          $data['archive'] = BerkasSantriModel::where(['id_santri' => $id])->first();
            if(isset($data['archive'])){
              echo 'data ada';
            }else{
              echo 'santri belum mengisi kelengkapan berkas';
            }
          }else {
            echo ':(';
          }
        }
    }
?>
