<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class PendidikanTerakhirModel extends Eloquent {

  protected $table      = 'pendidikan_terakhir';
  protected $primaryKey = 'id_pen_akhir';
  protected $fillable   = ['nama_sekolah_siswa','jenis_sekolah_siswa','status_sekolah_siswa','alamat_sekolah_siswa','provinsi_siswa','nss','npsn','no_seri_ijazah','no_seri_skhun','no_peserta_ujian','id_siswa'];
  public $timestamps = true;

}
?>
