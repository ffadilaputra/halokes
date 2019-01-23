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
        $data['parents'] = IbuModel::where(['id_santri' => $id])->first();
        $data['ayah'] = AyahModel::where(['id_santri' => $id])->first();
        $data['wali'] = WaliModel::where(['id_santri' => $id])->first();
        if(isset($data['parents'])){
          $data['admin'] = $this->session->userdata('admin_logged_in');
          $this->view('admin.pages.kelengkapan.parents',$data);
        }else{
          echo 'santri belum mengisi berkas orang tua/wali';
        }
      }else {
        echo ':(';
      }
    }

    public function education($id = NULL){
      $this->autenthicateAdmin();
      if($id){
        $data['edu'] = PendidikanTerakhirModel::where(['id_siswa' => $id])->first();
          if(isset($data['edu'])){
            $data['admin'] = $this->session->userdata('admin_logged_in');
            $this->view('admin.pages.kelengkapan.education',$data);
          }else{
            echo 'santri belum mengisi pendidikan terakhir';
          }
        }else {
          echo ':(';
        }
      }

      public function archive($id){
        $this->autenthicateAdmin();
        if(isset($id)){
          $data['santri'] = SantriModel::where(['id_santri' => $id])->first();
          $data['ibu'] = IbuModel::where(['id_santri' => $id])->first();
          $data['ayah'] = AyahModel::where(['id_santri' => $id])->first();
          $data['wali'] = WaliModel::where(['id_santri' => $id])->first();
          $data['archive'] = BerkasSantriModel::where(['id_santri' => $id])->first();
            if(isset($data['archive'])){
              $data['admin'] = $this->session->userdata('admin_logged_in');
              $this->view('admin.pages.kelengkapan.archive',$data);
            }else{
              echo 'santri belum mengisi kelengkapan berkas';
            }
          }else {
            echo ':(';
          }
        }
    }
?>
