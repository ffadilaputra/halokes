<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class SantriModel extends Eloquent {

  protected $table      = 'ids_santri';
  protected $primaryKey = 'nis';
  protected $fillable   = ['nis','nama_lengkap','panggilan','nik','tempat_lahir','tgl_lahir','alamat','kelurahan','kecamatan','kota','provinsi','kode_pos','telepon'];
  public $timestamps = true;

}
?>
