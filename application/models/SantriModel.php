<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class SantriModel extends Eloquent {

  protected $table      = 'ids_santri';
  protected $primaryKey = 'id_santri';
  protected $fillable   = ['id_santri','nis','nama_lengkap','panggilan','nik','tempat_lahir','tgl_lahir','alamat','jenjang','kelurahan','kecamatan','kota','provinsi','kode_pos','telepon'];
  public $incrementing = false;
  public $timestamps = true;

  public function getVerification(){
    return $this->belongsTo('VerifikasiModel','id_santri','id_santri');
  }

}
?>
