<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class WaliModel extends Eloquent {

  protected $table      = 'ids_wali';
  protected $primaryKey = 'id_wali';
  protected $fillable   = ['nama_lengkap','panggilan','nik','tempat_lahir','tgl_lahir','hbgn_wali_santri','status_wali','alamat','kota','provinsi','kode_pos','telepon','pendidikan','pekerjaan','penghasilan','id_santri'];
  public $timestamps = true;
  public $incrementing = false;

}
?>
