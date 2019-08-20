<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class SppModel extends Eloquent {

  protected $table      = 'spp';
  protected $primaryKey = 'id_spp';
  protected $fillable   = ['id_santri','bulan','kelas','tahun_akademik'];
  public $timestamps = true;

  public function detailSantri(){
    return $this->belongsTo('SantriModel','id_santri','id_santri');
  }

  public function detailKelas(){
    return $this->belongsTo('KelasModel','id_kelas','id_masterkelas');
  }

}
?>
