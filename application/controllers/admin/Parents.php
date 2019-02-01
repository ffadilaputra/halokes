<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Parents extends MY_Controller {

    public function santri($santri){
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $data['santri'] = SantriModel::where(['id_santri' => $santri])->first();
      $this->view('admin.pages.kelengkapan.edit_santri',$data);
    }

    public function update_santri($santri){
      SantriModel::where(['id_santri' => $santri])->update($this->input->post());
      redirect('admin/berkas/santri/'.$santri);
    }

    public function ibu($santri){
      $this->autenthicateAdmin();
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $data['parents'] = IbuModel::where(['id_santri'=> $santri])->first();
      $this->view('admin.pages.kelengkapan.edit_ibu',$data);
    }

    public function update_ibu($santri){
      IbuModel::where(['id_santri' => $santri])->update($this->input->post());
      redirect('admin/berkas/parents/'.$santri);
    }

    public function ayah($santri){
      $this->autenthicateAdmin();
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $data['parents'] = AyahModel::where(['id_santri'=> $santri])->first();
      $this->view('admin.pages.kelengkapan.edit_ayah',$data);
    }

    public function update_ayah($santri){
      AyahModel::where(['id_santri' => $santri])->update($this->input->post());
      redirect('admin/berkas/parents/'.$santri);
    }

    public function wali($santri){
      $this->autenthicateAdmin();
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $data['parents'] = WaliModel::where(['id_santri'=> $santri])->first();
      $this->view('admin.pages.kelengkapan.edit_wali',$data);
    }

    public function update_wali($santri){
      WaliModel::where(['id_santri' => $santri])->update($this->input->post());
      redirect('admin/berkas/parents/'.$santri);
    }

    public function file($santri){
      if(!empty($_FILES['foto_santri']['name'])){
        $_POST['foto_santri'] = $this->do_upload('foto_santri', 'assets/uploads/', 'image', TRUE);
        $berkas = BerkasSantriModel::where(['id_santri'=>$santri])->first();
        unlink('assets/uploads/'.$berkas->foto_santri);
      }
      if(!empty($_FILES['foto_wali_santri']['name'])){
        $_POST['foto_wali_santri'] = $this->do_upload('foto_wali_santri', 'assets/uploads/', 'image', TRUE);
        $berkas = BerkasSantriModel::where(['id_santri'=>$santri])->first();
        unlink('assets/uploads/'.$berkas->foto_wali_santri);
      }
      if(!empty($_FILES['foto_ayah_santri']['name'])){
        $_POST['foto_ayah_santri'] = $this->do_upload('foto_ayah_santri', 'assets/uploads/', 'image', TRUE);
        $berkas = BerkasSantriModel::where(['id_santri'=>$santri])->first();
        unlink('assets/uploads/'.$berkas->foto_ayah_santri);
      }
      if(!empty($_FILES['foto_ibu_santri']['name'])){
        $_POST['foto_ibu_santri'] = $this->do_upload('foto_ibu_santri', 'assets/uploads/', 'image', TRUE);
        $berkas = BerkasSantriModel::where(['id_santri'=>$santri])->first();
        unlink('assets/uploads/'.$berkas->foto_ibu_santri);
      }
      if(!empty($_FILES['akta_santri']['name'])){
        $_POST['akta_santri'] = $this->do_upload('akta_santri', 'assets/uploads/', 'image', TRUE);
        $berkas = BerkasSantriModel::where(['id_santri'=>$santri])->first();
        unlink('assets/uploads/'.$berkas->akta_santri);
      }
      if(!empty($_FILES['kk_santri']['name'])){
        $_POST['kk_santri'] = $this->do_upload('kk_santri', 'assets/uploads/', 'image', TRUE);
        $berkas = BerkasSantriModel::where(['id_santri'=>$santri])->first();
        unlink('assets/uploads/'.$berkas->kk_santri);
      }
      if(!empty($_FILES['bpjs_santri']['name'])){
        $_POST['bpjs_santri'] = $this->do_upload('bpjs_santri', 'assets/uploads/', 'image', TRUE);
        $berkas = BerkasSantriModel::where(['id_santri'=>$santri])->first();
        unlink('assets/uploads/'.$berkas->bpjs_santri);
      }
      if(!empty($_FILES['ktp_santri']['name'])){
        $_POST['ktp_santri'] = $this->do_upload('ktp_santri', 'assets/uploads/', 'image', TRUE);
        $berkas = BerkasSantriModel::where(['id_santri'=>$santri])->first();
        unlink('assets/uploads/'.$berkas->ktp_santri);
      }
      if(!empty($_FILES['ktp_ayah']['name'])){
        $_POST['ktp_ayah'] = $this->do_upload('ktp_ayah', 'assets/uploads/', 'image', TRUE);
        $berkas = BerkasSantriModel::where(['id_santri'=>$santri])->first();
        unlink('assets/uploads/'.$berkas->ktp_ayah);
      }
      if(!empty($_FILES['ktp_ibu']['name'])){
        $_POST['ktp_ibu'] = $this->do_upload('ktp_ibu', 'assets/uploads/', 'image', TRUE);
        $berkas = BerkasSantriModel::where(['id_santri'=>$santri])->first();
        unlink('assets/uploads/'.$berkas->ktp_ibu);
      }
      if(!empty($_FILES['ktp_wali']['name'])){
        $_POST['ktp_wali'] = $this->do_upload('ktp_wali', 'assets/uploads/', 'image', TRUE);
        $berkas = BerkasSantriModel::where(['id_santri'=>$santri])->first();
        unlink('assets/uploads/'.$berkas->ktp_ibu);
      }
      if(!empty($_FILES['ijazah_santri']['name'])){
        $_POST['ijazah_santri'] = $this->do_upload('ijazah_santri', 'assets/uploads/', 'image', TRUE);
        $berkas = BerkasSantriModel::where(['id_santri'=>$santri])->first();
        unlink('assets/uploads/'.$berkas->ijazah_santri);
      }
      if(!empty($_FILES['skhun_santri']['name'])){
        $_POST['skhun_santri'] = $this->do_upload('skhun_santri', 'assets/uploads/', 'image', TRUE);
        $berkas = BerkasSantriModel::where(['id_santri'=>$santri])->first();
        unlink('assets/uploads/'.$berkas->skhun_santri);
      }
      BerkasSantriModel::where(['id_santri'=> $santri])->update($this->input->post());
      redirect('admin/berkas/archive/'.$santri);
    }

}
?>
