<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->authenticate();
    }

    public function index()
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['santri'] = PembayaranModel::all();
        $this->view('admin.pages.pembayaran.index', $data);
    }

    public function create()
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['santri'] = SantriModel::all();
        $this->view('admin.pages.pembayaran.create', $data);
    }

    public function store()
    {
        $this->validate($this->input->post(), [
            'id_santri' => 'required',
            'status_pembayaran' => 'required',
            'bukti_pembayaran' => 'mimes:jpeg,bmp,png'
        ]);
        $generate = 'PBR' . random_string('alnum', 5) . date('my');
        $_POST['kode_pembayaran'] = $generate;
        if (!empty($_FILES['bukti_pembayaran']['name'])) {
            $_POST['bukti_pembayaran'] = $this->do_upload(
                'bukti_pembayaran',
                'assets/uploads/',
                'image',
                true
            );
        }
        PembayaranModel::create($this->input->post());
        redirect('admin/pembayaran');
    }

    public function show($id)
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['santri'] = PembayaranModel::find($id);
        $this->view('admin.pages.pembayaran.show', $data);
    }

    public function edit($id)
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['santri'] = PembayaranModel::find($id);
        $this->view('admin.pages.pembayaran.edit', $data);
    }

    public function update($id)
    {
        $this->validate($this->input->post(), [
            'status_pembayaran' => 'required',
            'bukti_pembayaran' => 'mimes:jpeg,bmp,png'
        ]);
        if (!empty($_FILES['bukti_pembayaran']['name'])) {
            $_POST['bukti_pembayaran'] = $this->do_upload(
                'bukti_pembayaran',
                'assets/uploads/',
                'image',
                true
            );
            $pembayaran = PembayaranModel::find($id);
            unlink('assets/uploads/' . $data->bukti_pembayaran);
        }
        PembayaranModel::find($id)->update($this->input->post());
        redirect('admin/pembayaran');
    }

    public function delete($id)
    {
        $data = PembayaranModel::find($id);
        unlink('assets/uploads/' . $data->bukti_pembayaran);
        PembayaranModel::destroy($id);
        redirect('admin/pembayaran');
    }

    public function nota($id)
    {
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['tanggungan'] = TanggunganPembayaranModel::where([
            'id_santri' => $id
        ])->first();
        $data['list'] = TanggunganPembayaranModel::where([
            'id_santri' => $id
        ])->get();
        $data['keuangan'] = KategoriKeuanganModel::all();
        $this->view('admin.pages.pembayaran.preview_nota', $data);
    }

    public function spp(){
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['tahun_akademik'] = TahunAkademikModel::first();
        $data['alltahunakademik'] = TahunAkademikModel::all();
        $data['laporanspp'] = KategoriKeuanganModel::where(['nama' => 'Syahriyah'] , ['tahun_akademik' => $data['tahun_akademik']->nama])->get();
        $data['spp'] = SppModel::where(['tahun_akademik' => $data['tahun_akademik']->nama])->get();
        $this->view('admin.pages.spp.index',$data);
    }

    public function sppPerTanggal(){
        $data['admin'] = $this->session->userdata('admin_logged_in');
        $data['alltahunakademik'] = TahunAkademikModel::all();
        $data['tahunakademik'] = $this->input->post('tahun_akademik');
        $data['laporanspp'] = KategoriKeuanganModel::where(['nama' => 'Syahriyah'] , ['tahun_akademik' => $data['tahunakademik']])->get();
        $data['spp'] = SppModel::where(['tahun_akademik' => $data['tahunakademik']])->whereBetween('created_at', [$this->input->post('tanggal').' 00:00:00', $this->input->post('tanggal').' 23:59:00'])->get();
        $this->view('admin.pages.spp.index',$data);
    }

    public function angsuran(){
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $data['tahun_akademik'] = TahunAkademikModel::first();
      $data['alltahunakademik'] = TahunAkademikModel::all();
      $data['laporanangsuran'] = KategoriKeuanganModel::where(['nama' => 'Pangkal'] , ['tahun_akademik' => $data['tahun_akademik']->nama])->get();
      $data['angsuran'] = AngsuranModel::where(['tahun_akademik' => $data['tahun_akademik']->nama])->get();
      $this->view('admin.pages.angsuran.index',$data);
    }

    public function angsuranPerTanggal(){
      $data['admin'] = $this->session->userdata('admin_logged_in');
      $data['alltahunakademik'] = TahunAkademikModel::all();
      $data['tahunakademik'] = $this->input->post('tahun_akademik');
      $data['laporanangsuran'] = KategoriKeuanganModel::where(['nama' => 'Pangkal'] , ['tahun_akademik' => $data['tahunakademik']])->get();
      $data['angsuran'] = AngsuranModel::where(['tahun_akademik' => $data['tahunakademik']])->whereBetween('created_at', [$this->input->post('tanggal').' 00:00:00', $this->input->post('tanggal').' 23:59:00'])->get();
      $this->view('admin.pages.angsuran.index',$data);
    }
}
