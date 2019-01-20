<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class BerkasSantriModel extends Eloquent {

  protected $table      = 'berkas_santri';
  protected $primaryKey = 'id_berkas_santri';
  protected $fillable   = ['foto_santri','foto_wali_santri','foto_ayah_santri','foto_ibu_santri','akta_santri','kk_santri','bpjs_santri','ktp_santri','ktp_wali','ktp_ayah','ktp_ibu','ijazah_santri','skhun_santri','id_santri'];
  public $timestamps = true;
  public $incrementing = true;

}
?>
