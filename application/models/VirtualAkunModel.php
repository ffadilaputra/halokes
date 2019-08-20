<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class VirtualAkunModel extends Eloquent {

  protected $table      = 'virtual_akun';
  protected $primaryKey = 'id_virtual_akun';
  protected $fillable   = ['id_santri','no_virtual_account','no_pendaftaran','nomor_induk'];
  public $timestamps = true;

  public function getDetails(){
  }

}
?>
