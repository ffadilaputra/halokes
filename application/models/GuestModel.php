<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class GuestModel extends Eloquent {

  protected $table      = 'guest';
  protected $primaryKey = 'id_guest';
  protected $fillable   = ['id_guest','no_virtual_account','password','id_santri'];
  public $timestamps = true;
  public $incrementing = false;

  public function detailSantri() {
    return $this->belongsTo('SantriModel', 'id_santri', 'id_santri');
  }

}
?>
