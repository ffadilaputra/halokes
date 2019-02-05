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

    public function destroy($id){
      $this->autenthicateAdmin();
      $data['admin'] = $this->session->userdata('admin_logged_in');

      $berkas = BerkasSantriModel::where(['id_santri'=> $id])->first();
      if(isset($berkas->foto_santri)){
        unlink('assets/uploads/'.$berkas->foto_santri);
      }
      if(isset($berkas->foto_wali_santri)){
        unlink('assets/uploads/'.$berkas->foto_wali_santri);
      }
      if(isset($berkas->foto_ayah_santri)){
        unlink('assets/uploads/'.$berkas->foto_ayah_santri);
      }
      if(isset($berkas->foto_ibu_santri)){
        unlink('assets/uploads/'.$berkas->foto_ibu_santri);
      }
      if(isset($berkas->akta_santri)){
        unlink('assets/uploads/'.$berkas->akta_santri);
      }
      if(isset($berkas->kk_santri)){
        unlink('assets/uploads/'.$berkas->kk_santri);
      }
      if(isset($berkas->bpjs_santri)){
        unlink('assets/uploads/'.$berkas->bpjs_santri);
      }
      if(isset($berkas->ktp_santri)){
        unlink('assets/uploads/'.$berkas->ktp_santri);
      }
      if(isset($berkas->ktp_wali)){
        unlink('assets/uploads/'.$berkas->ktp_wali);
      }
      if(isset($berkas->ktp_ayah)){
        unlink('assets/uploads/'.$berkas->ktp_ayah);
      }
      if(isset($berkas->ktp_ibu)){
        unlink('assets/uploads/'.$berkas->ktp_ibu);
      }
      if(isset($berkas->ijazah_santri)){
        unlink('assets/uploads/'.$berkas->ijazah_santri);
      }
      if(isset($berkas->skhun_santri)){
        unlink('assets/uploads/'.$berkas->skhun_santri);
      }
      BerkasSantriModel::where(['id_santri' => $id])->delete();
      AyahModel::where(['id_santri' => $id])->delete();
      IbuModel::where(['id_santri' => $id])->delete();
      WaliModel::where(['id_santri' => $id])->delete();
      PendidikanTerakhirModel::where(['id_siswa' => $id])->delete();
      VirtualAkunModel::where(['id_santri' => $id])->delete();
      SantriModel::where(['id_santri' => $id])->delete();
      redirect('admin/santri');
    }

    public function ma(){
      $this->autenthicateAdmin();
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $data['santri'] = SantriModel::where([
        'tingkat_pendidikan'=> 'ma'
      ])->get();
      $this->view('admin.pages.santri.ma',$data);
    }

    public function mts(){
      $this->autenthicateAdmin();
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $data['santri'] = SantriModel::where([
        'tingkat_pendidikan'=> 'mts'
      ])->get();
      $this->view('admin.pages.santri.mts',$data);
    }

    public function md(){
      $this->autenthicateAdmin();
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $data['santri'] = SantriModel::where([
        'tingkat_pendidikan'=> 'md'
      ])->get();
      $this->view('admin.pages.santri.md',$data);
    }

    public function verify($id){
      $this->autenthicateAdmin();
      $data['admin'] = $this->session->userdata('admin_logged_in');

      $kode_yayasan = 98830055;
      $count = SantriModel::count();
      $data['santry'] = SantriModel::where([
        'id_santri' => $id
      ])->first();
      $jenjang = $this->generateJenjang($data['santry']['tingkat_pendidikan']);
      $jk = $this->generateJK($data['santry']['jenis_kelamin']);
      $date = new DateTime($data['santry']['created_at']);
      $get_date = $date->format('Y');
      $tahun_masuk = substr($get_date, -2);
      $urut = str_pad($count+1,4,'0',STR_PAD_LEFT);
      $virtual_acc_code = $kode_yayasan.$jenjang.$jk.$tahun_masuk.$urut;
      $induk = $tahun_masuk.$urut;
        //var_dump($induk);
      VirtualAkunModel::where(['id_santri' => $id])->update(['no_virtual_account'=> $virtual_acc_code , 'nomor_induk' => $induk]);
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

    public function generateJK($jk){
      if($jk == 'laki-laki'){
        return 1;
      }elseif($jk == 'perempuan'){
        return 2;
      }
    }

    public function generateJenjang($jenjang){
      if($jenjang == 'mts'){
        return 1;
      }elseif($jenjang == 'ma'){
        return 2;
      }elseif($jenjang == 'md'){
        return 3;
      }
  }

  }
?>
