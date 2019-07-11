<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class KategoriKeuanganModel extends Eloquent {

  protected $table      = 'kategori_keuangan';
  protected $primaryKey = 'id_kategori_keuangan';
  protected $fillable   = ['nama','biaya','tahun_akademik'];
  public $timestamps = true;

  protected function tahun(){
      return $this->belongsTo('TahunAkademikModel','id_tahun_akademik','id_tahun_akademik');
  }

}
?>
