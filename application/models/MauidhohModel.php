<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class MauidhohModel extends Eloquent {

  protected $table      = 'mauidhoh';
  protected $primaryKey = 'id_mauidhoh';
  protected $fillable   = ['description'];
  public $timestamps = true;

}
?>
