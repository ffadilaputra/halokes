<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class AyahModel extends Eloquent {

  protected $table      = 'ids_ayah';
  protected $primaryKey = 'id_ayah';
  protected $fillable   = ['nama_lengkap','panggilan','nik','tempat_lahir','tgl_lahir','hbgn_ayah_santri','status_ayah','alamat','kota','provinsi','kode_pos','telepon','pendidikan','pekerjaan','penghasilan','id_santri'];
  public $timestamps = true;
  public $incrementing = false;

}
?>
