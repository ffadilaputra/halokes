<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class PendidikanModel extends Eloquent {

  protected $table      = 'pendidikan_terakhir';
  protected $primaryKey = 'id_pen_terakhir';
  protected $fillable   = ['pendidikan_terakhir'];
  public $timestamps = true;

}
?>
