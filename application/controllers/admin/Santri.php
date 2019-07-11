<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Santri extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->authenticate();
    }

    public function index()
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['santri'] = SantriModel::where([
            'status_verifikasi' => 'belum_verifikasi'
        ])->get();
        $this->view('admin.pages.santri.index', $data);
    }

    public function show($id)
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['santri'] = SantriModel::find($id);
        $data['tahun_akademik'] = TahunAkademikModel::first();
        $data['laporanangsuran'] = KategoriKeuanganModel::where(['nama' => 'Pangkal'] , ['tahun_akademik' => $data['tahun_akademik']->nama])->get();
        $data['angsuran'] = AngsuranModel::where(['id_santri' => $id])->get();
        $data['spp'] = SppModel::where(['id_santri' => $id])->get();
        $this->view('admin.pages.santri.show', $data);
    }

    public function all()
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['santri'] = SantriModel::where([
            'status_verifikasi' => 'terverifikasi'
        ])->get();
        $this->view('admin.pages.santri.verifed', $data);
    }

    public function destroy($id)
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');

        $berkas = BerkasSantriModel::where(['id_santri' => $id])->first();
        if (isset($berkas->foto_santri)) {
            unlink('assets/uploads/' . $berkas->foto_santri);
        }
        if (isset($berkas->foto_wali_santri)) {
            unlink('assets/uploads/' . $berkas->foto_wali_santri);
        }
        if (isset($berkas->foto_ayah_santri)) {
            unlink('assets/uploads/' . $berkas->foto_ayah_santri);
        }
        if (isset($berkas->foto_ibu_santri)) {
            unlink('assets/uploads/' . $berkas->foto_ibu_santri);
        }
        if (isset($berkas->akta_santri)) {
            unlink('assets/uploads/' . $berkas->akta_santri);
        }
        if (isset($berkas->kk_santri)) {
            unlink('assets/uploads/' . $berkas->kk_santri);
        }
        if (isset($berkas->bpjs_santri)) {
            unlink('assets/uploads/' . $berkas->bpjs_santri);
        }
        if (isset($berkas->ktp_santri)) {
            unlink('assets/uploads/' . $berkas->ktp_santri);
        }
        if (isset($berkas->ktp_wali)) {
            unlink('assets/uploads/' . $berkas->ktp_wali);
        }
        if (isset($berkas->ktp_ayah)) {
            unlink('assets/uploads/' . $berkas->ktp_ayah);
        }
        if (isset($berkas->ktp_ibu)) {
            unlink('assets/uploads/' . $berkas->ktp_ibu);
        }
        if (isset($berkas->ijazah_santri)) {
            unlink('assets/uploads/' . $berkas->ijazah_santri);
        }
        if (isset($berkas->skhun_santri)) {
            unlink('assets/uploads/' . $berkas->skhun_santri);
        }
        BerkasSantriModel::where(['id_santri' => $id])->delete();
        AyahModel::where(['id_santri' => $id])->delete();
        IbuModel::where(['id_santri' => $id])->delete();
        WaliModel::where(['id_santri' => $id])->delete();
        PendidikanTerakhirModel::where(['id_siswa' => $id])->delete();
        VirtualAkunModel::where(['id_santri' => $id])->delete();
        SantriModel::where(['id_santri' => $id])->delete();
        redirect('admin/santri/all');
    }

    public function ma()
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['santri'] = SantriModel::where([
            'tingkat_pendidikan' => 'ma',
            'status_verifikasi' => 'terverifikasi'
        ])->get();
        $this->view('admin.pages.santri.ma', $data);
    }

    public function mts()
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['santri'] = SantriModel::where([
            'tingkat_pendidikan' => 'mts',
            'status_verifikasi' => 'terverifikasi'
        ])->get();
        $this->view('admin.pages.santri.mts', $data);
    }

    public function md()
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['santri'] = SantriModel::where([
            'tingkat_pendidikan' => 'md',
            'status_verifikasi' => 'terverifikasi'
        ])->get();
        $this->view('admin.pages.santri.md', $data);
    }

    public function verify($id)
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');

        $kode_yayasan = 98830055;
        $count = SantriModel::count();
        $data['santry'] = SantriModel::where([
            'id_santri' => $id
        ])->first();
        $jenjang = $this->generateJenjang(
            $data['santry']['tingkat_pendidikan']
        );
        $jk = $this->generateJK($data['santry']['jenis_kelamin']);
        $date = new DateTime($data['santry']['created_at']);
        $get_date = $date->format('Y');
        $tahun_masuk = substr($get_date, -2);
        $urut = str_pad($count + 1, 4, '0', STR_PAD_LEFT);
        $virtual_acc_code = $kode_yayasan . $jenjang . $jk . $tahun_masuk . $urut;
        $induk = $tahun_masuk . $urut;
        //var_dump($induk);
        VirtualAkunModel::where(['id_santri' => $id])->update([
            'no_virtual_account' => $virtual_acc_code,
            'nomor_induk' => $induk
        ]);
        SantriModel::find($id)->update([
            'status_verifikasi' => 'terverifikasi'
        ]);
        redirect('admin/santri/all');
    }

    public function print($id)
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['santri'] = SantriModel::find($id);
        $data['date_now'] = longdate_indo(date('Y-m-d'));
        $data['pengumuman'] = PengumumanModel::all();
        $this->view('admin.pages.santri.cetak_va', $data);
    }

    public function generateJK($jk)
    {
        if ($jk == 'laki-laki') {
            return 1;
        } elseif ($jk == 'perempuan') {
            return 2;
        }
    }

    public function generateJenjang($jenjang)
    {
        if ($jenjang == 'mts') {
            return 1;
        } elseif ($jenjang == 'ma') {
            return 2;
        } elseif ($jenjang == 'md') {
            return 3;
        }
    }

    public function pembayaran($id){
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['santri'] = SantriModel::find($id);
        $data['tahun_akademik'] = TahunAkademikModel::first();
        $data['angsuran'] = AngsuranModel::where(['id_santri' => $id , 'tahap' => 1])->first();
        $data['angsuran_2'] = AngsuranModel::where(['id_santri' => $id , 'tahap' => 2])->first();
        $data['angsuran_3'] = AngsuranModel::where(['id_santri' => $id , 'tahap' => 3])->first();
        $data['januari'] = SppModel::where(['id_santri' => $id , 'tahun_akademik' => $data['tahun_akademik']->nama, 'bulan' => 'januari'])->first();
        $data['februari'] = SppModel::where(['id_santri' => $id , 'tahun_akademik' => $data['tahun_akademik']->nama, 'bulan' => 'februari'])->first();
        $data['maret'] = SppModel::where(['id_santri' => $id , 'tahun_akademik' => $data['tahun_akademik']->nama, 'bulan' => 'maret'])->first();
        $data['april'] = SppModel::where(['id_santri' => $id , 'tahun_akademik' => $data['tahun_akademik']->nama, 'bulan' => 'april'])->first();
        $data['mei'] = SppModel::where(['id_santri' => $id , 'tahun_akademik' => $data['tahun_akademik']->nama, 'bulan' => 'mei'])->first();
        $data['juni'] = SppModel::where(['id_santri' => $id , 'tahun_akademik' => $data['tahun_akademik']->nama, 'bulan' => 'juni'])->first();
        $data['juli'] = SppModel::where(['id_santri' => $id , 'tahun_akademik' => $data['tahun_akademik']->nama, 'bulan' => 'juli'])->first();
        $data['agustus'] = SppModel::where(['id_santri' => $id , 'tahun_akademik' => $data['tahun_akademik']->nama, 'bulan' => 'agustus'])->first();
        $data['september'] = SppModel::where(['id_santri' => $id , 'tahun_akademik' => $data['tahun_akademik']->nama, 'bulan' => 'september'])->first();
        $data['oktober'] = SppModel::where(['id_santri' => $id , 'tahun_akademik' => $data['tahun_akademik']->nama, 'bulan' => 'oktober'])->first();
        $data['november'] = SppModel::where(['id_santri' => $id , 'tahun_akademik' => $data['tahun_akademik']->nama, 'bulan' => 'november'])->first();
        $data['desember'] = SppModel::where(['id_santri' => $id , 'tahun_akademik' => $data['tahun_akademik']->nama, 'bulan' => 'desember'])->first();
        $this->view('admin.pages.santri.pembayaran',$data);
    }

    //menggunakan 2 parameter karna tahun akademik memiliki format 2019/2010, jadi dibaca beda parameter
    public function angsuran($id, $tahun_akademik_start, $tahun_akademik_end){
        $cek = AngsuranModel::where(['id_santri' => $id, 'tahap' => 1])->first();
        if($cek){
            echo 'Gagal masukan data, data duplikat';
        }else{
            $data = array(
                'id_santri' => $id,
                'tahap' => 1,
                'tahun_akademik' => $tahun_akademik_start.'/'.$tahun_akademik_end,
            );
            AngsuranModel::create($data);
            redirect('admin/santri/pembayaran/'.$id);
        }
    }
    public function angsuran_2($id, $tahun_akademik_start, $tahun_akademik_end){
        $cek = AngsuranModel::where(['id_santri' => $id , 'tahap' => 2])->first();
        if($cek){
            echo 'Gagal masukan data, data duplikat';
        }else{
            $data = array(
                'id_santri' => $id,
                'tahap' => 2,
                'tahun_akademik' => $tahun_akademik_start.'/'.$tahun_akademik_end,
            );
            AngsuranModel::create($data);
            redirect('admin/santri/pembayaran/'.$id);
        }
    }
    public function angsuran_3($id, $tahun_akademik_start, $tahun_akademik_end){
        $cek = AngsuranModel::where(['id_santri' => $id , 'tahap' => 3])->first();
        if($cek){
            echo 'Gagal masukan data, data duplikat';
        }else{
            $data = array(
                'id_santri' => $id,
                'tahap' => 3,
                'tahun_akademik' => $tahun_akademik_start.'/'.$tahun_akademik_end,
            );
            AngsuranModel::create($data);
            redirect('admin/santri/pembayaran/'.$id);
        }
    }

    public function deleteAngsuran($id, $tahap)
    {
      if ($id) {
        AngsuranModel::where('id_santri', $id)
                      ->where('tahap', $tahap)
                      ->delete();
        redirect('admin/santri/pembayaran/'.$id);
      }else {
        redirect('admin/santri/pembayaran/'.$id);
      }
    }

    public function bayarSpp($id, $bulan, $tahun_akademik_start, $tahun_akademik_end){
      $data['tahun_akademik'] = TahunAkademikModel::first();
      $cek = SppModel::where(['id_santri' => $id , 'tahun_akademik' => $data['tahun_akademik']->nama, 'bulan' => $bulan])->first();
        if($cek){
            echo 'Gagal masukan data, data duplikat';
        }else{
            $data = array(
                'id_santri' => $id,
                'bulan' => $bulan,
                'tahun_akademik' => $tahun_akademik_start.'/'.$tahun_akademik_end,
            );
            SppModel::create($data);
            redirect('admin/santri/pembayaran/'.$id);
        }
    }
}
?>
