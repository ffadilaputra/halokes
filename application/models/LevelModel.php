<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class LevelModel extends Eloquent {

  protected $table      = 'level';
  protected $primaryKey = 'id_level';
  protected $fillable   = ['level'];
  public $timestamps = true;

}
?>
