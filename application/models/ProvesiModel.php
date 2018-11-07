<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class ProvesiModel extends Eloquent {

  protected $table      = 'provesi';
  protected $primaryKey = 'id_provesi';
  protected $fillable   = ['provesi'];
  public $timestamps = true;

}
?>
