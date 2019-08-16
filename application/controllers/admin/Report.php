<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->authenticate();
  }

  function pembayaran($id)
  {
    $this->load->library('fpdf');

    $data['admin'] = $this->session->userdata('admin_logged_in');
    $data['santri'] = SantriModel::find($id);
    $data['tahun_akademik'] = TahunAkademikModel::first();
    $data['angsuran'] = AngsuranModel::where(['id_santri' => $id , 'tahun_akademik' => $data['tahun_akademik']->nama])->whereBetween('created_at', [date('Y-m-d').' 00:00:00', date('Y-m-d').' 23:59:00'])->get();
    $data['spp'] = SppModel::where(['id_santri' => $id , 'tahun_akademik' => $data['tahun_akademik']->nama])->whereBetween('created_at', [date('Y-m-d').' 00:00:00', date('Y-m-d').' 23:59:00'])->get();
    $data['laporanspp'] = KategoriKeuanganModel::where(['nama' => 'Syahriyah'] , ['tahun_akademik' => $data['tahun_akademik']->nama])->get();
    $data['laporanpangkal'] = KategoriKeuanganModel::where(['nama' => 'Pangkal'] , ['tahun_akademik' => $data['tahun_akademik']->nama])->get();

    $pdf = new FPDF('P','mm','A4', true, 'UTF-8');

    $pdf->AliasNbPages();
    $pdf->AddPage();

    // header start
    $urlimg = base_url('assets/wordify/images/logo.jpg');
    // Logo
    $pdf->Image($urlimg,10,6,20);
    // font size
    $pdf->SetFont('Arial','B',12);
    // Move to the right
    $pdf->Cell(80);
    // Title
    $pdf->Cell(30,5,"YAYASAN MA'HAD DARUN NAJAH",0,0,'C');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(-25);
    $pdf->Cell(20,15,'PONDOK PESANTREN PPAI DARUN NAJAH',0,0,'C');
    $pdf->SetFont('Arial','B',9);
    $pdf->Cell(-20);
    $pdf->Cell(20,23,'Jl. Pesantren, No. 51, Ngijo, Karangploso, Malang, (0341)5034501',0,0,'C');
    // Line break
    $pdf->Ln(20);
    // horizontal line
    $pdf->Line(10, 28, 215-20, 28);
    // header end
    $jenjang = '';
    $totaltransaksi = 0;

    // // content
    if($data['santri']->tingkat_pendidikan == 'mt'){
      $jenjang = 'Madarasah Tsanawiyah';
    }elseif($data['santri']->tingkat_pendidikan == 'ma'){
      $jenjang = 'Madarasah Aliyah';
    }elseif($data['santri']->tingkat_pendidikan == 'md'){
      $jenjang = 'Madarasah Diniyah';
    }

    $pdf->SetFont('Times','',12);
    $pdf->Cell(60,10,'Virtual Akun',0,0,'C');
    $pdf->Cell(0,10,': '.$data['santri']->virtualAkun->no_virtual_account,0,0,'L');
    $pdf->Ln(1);
    $pdf->Cell(60,25,'Nama        ',0,0,'C');
    $pdf->Cell(0,25,': '.$data['santri']->nama_lengkap,0,0,'L');
    $pdf->Ln(1);
    $pdf->Cell(60,39,'Jenjang       ',0,0,'C');
    $pdf->Cell(40,39,': '.$jenjang,0,0,'L');

    $pdf->Ln(30);
    $pdf->SetFont('Times','B',12);
    $pdf->Cell(47,10,'Pembayaran',0,0,'C');
    $pdf->Cell(100,10,'Nominal',0,0,'C');

    $pdf->Ln();
    $pdf->SetFont('Times','',12);
    // Column headings
    $pisah = $data['laporanpangkal'][0]->biaya / 3;
    // Data
    foreach($data['angsuran'] as $row)
    {
        $pdf->Cell(46,6,'Tahap :   '.$row->tahap,0,0,'C');
        $pdf->Cell(106,6,convertRupiah(round($pisah, 0)),0,0,'C');
        $pdf->Ln();
        $totaltransaksi += round($pisah, 0);
    }
    $pdf->Ln();
    foreach($data['spp'] as $row)
    {
        $pdf->Cell(50,6,'Bulan :   '.$row->bulan,0,0,'C');
        $pdf->Cell(100,6,convertRupiah($data['laporanspp'][0]->biaya),0,0,'C');
        $pdf->Ln();
        $totaltransaksi += $data['laporanspp'][0]->biaya;
    }

    $pdf->Ln();
    $pdf->Line(20, 90, 145-20, 90);
    $pdf->SetFont('Times','B',12);
    $pdf->Cell(35,10,'Total',0,0,'C');
    $pdf->Cell(125,10,': '.convertRupiah($totaltransaksi),0,0,'C');

    $pdf->Ln();
    $pdf->Ln();
    $pdf->SetFont('Times','',12);
    $pdf->Cell(285,10,'Malang, '.tgl_indo(date('Y-m-d')),0,0,'C');
    $pdf->Ln(2);
    $pdf->Cell(285,20,'yang bertanda tangan',0,0,'C');
    $pdf->Ln(20);
    $pdf->Cell(285,20,'.................................',0,0,'C');

    // content

    $pdf->Output('Kuitansi Pembayaran Oleh'.$data['santri']->nama_lengkap.'-'.date('d-m-Y H:i:s').'.pdf','I');
  }

  function tgl_indo($tanggal){
    $bulan = array (
      1 =>   'Januari',
      'Februari',
      'Maret',
      'April',
      'Mei',
      'Juni',
      'Juli',
      'Agustus',
      'September',
      'Oktober',
      'November',
      'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
  }
}
