<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class TanggunganPembayaranModel extends Eloquent {

  protected $table      = 'tanggungan_pembayaran';
  protected $primaryKey = 'id_tanggugan_pembayaran';
  protected $fillable   = ['nominal','biaya_harusdibayar','id_tahun_akademik','id_kategori_keuangan','id_santri'];
  public $timestamps = true;

  public function detailSantri(){
    return $this->belongsTo('SantriModel','id_santri','id_santri');
  }

  public function detailTahun(){
    return $this->belongsTo('TahunAkademikModel','id_tahun_akademik','id_tahun_akademik');
  }

  public function category(){
    return $this->belongsTo('KategoriKeuanganModel','id_kategori_keuangan','id_kategori_keuangan');
  }

}
?>
