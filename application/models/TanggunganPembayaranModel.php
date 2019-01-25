<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class TanggunganPembayaranModel extends Eloquent {

  protected $table      = 'tahun_akademik';
  protected $primaryKey = 'id_tahun_akademik';
  protected $fillable   = ['nominal','id_tahun_akademi','id_tahun_akademi','id_kategori_keuangan','id_santri'];
  public $timestamps = true;

}
?>
