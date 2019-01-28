<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class SantriModel extends Eloquent {

  protected $table      = 'ids_santri';
  protected $primaryKey = 'id_santri';
  protected $fillable   = ['id_santri','tingkat_pendidikan','jenis_siswa','no_induk','nisn','nama_lengkap','panggilan','nik','no_kk','tempat_lahir','tgl_lahir','jenis_kelamin','status_keluarga','anak_ke','jml_saudara','no_kip','no_bpjs','no_jamkes','hobi','kebutuhan_khusus','cita_cita','kota','status_verifikasi'];
  public $incrementing = false;
  public $timestamps = true;

}
?>
