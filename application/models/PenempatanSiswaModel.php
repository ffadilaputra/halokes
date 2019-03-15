<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class PenempatanSiswaModel extends Eloquent {

  protected $table      = 'penempatan_siswa_dikelas';
  protected $primaryKey = 'id_penempatan';
  protected $fillable   = ['id_masterkelas','id_santri'];
  public $timestamps = false;

  public function detailKelas(){
    return $this->belongsTo('KelasModel','id_masterkelas','id_masterkelas');
  }

  public function detailSantri(){
    return $this->belongsTo('SantriModel','id_santri','id_santri');
  }

}
?>
