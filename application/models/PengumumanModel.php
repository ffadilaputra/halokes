<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class PengumumanModel extends Eloquent {

  protected $table      = 'pengumuman';
  protected $primaryKey = 'id_pengumuman';
  protected $fillable   = ['pengumuman','keterangan'];
  public $timestamps = true;

}
?>
