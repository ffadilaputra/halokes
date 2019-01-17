<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class IbuModel extends Eloquent {

  protected $table      = 'ids_ibu';
  protected $primaryKey = 'id_ibu';
  protected $fillable   = ['nama_lengkap','panggilan','nik','tempat_lahir','tgl_lahir','hbgn_ibu_santri','status_ibu','alamat','kota','provinsi','kode_pos','telepon','pendidikan','pekerjaan','penghasilan','id_santri'];
  public $timestamps = true;
  public $incrementing = false;

}
?>
