<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class TahunAkademikModel extends Eloquent {

  protected $table      = 'tahun_akademik';
  protected $primaryKey = 'id_tahun_akademik';
  protected $fillable   = ['nama'];
  public $timestamps = true;

}
?>
