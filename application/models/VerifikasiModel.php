<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class VerifikasiModel extends Eloquent {

  protected $table      = 'verifikasi';
  protected $primaryKey = 'id';
  protected $fillable   = ['id_santri','status'];
  public $timestamps = true;

  public function getAllSantri(){
    return $this->belongsTo('SantriModel','id_santri','id_santri');
  }

}
?>
