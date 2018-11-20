<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class PembayaranModel extends Eloquent {

  protected $table      = 'pembayaran';
  protected $primaryKey = 'id';
  protected $fillable   = ['kode_pembayaran','id_santri','status_pembayaran','bukti_pembayaran'];
  public $timestamps = true;

  public function pembayaranSantri(){
    return $this->belongsTo('SantriModel','id_santri','id_santri');
  }

}
?>
