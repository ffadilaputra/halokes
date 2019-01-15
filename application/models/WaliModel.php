<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class WaliModel extends Eloquent {

  protected $table      = 'ids_wali';
  protected $primaryKey = 'id_wali';
  protected $fillable   = ['nama_lengkap','panggilan','nik','tempat_lahir','tgl_lahir','status_keluarga','status_wali','alamat','kota','provinsi','kode_pos','telepon','pendidikan_terakhir','pekerjaan','penghasilan'];
  public $timestamps = true;
  public $incrementing = false;

}
?>
