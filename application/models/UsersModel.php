<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class UsersModel extends Eloquent {

  protected $table      = 'users';
  protected $primaryKey = 'id_users';
  protected $fillable   = ['id_users','nama_lengkap','tempat_lahir','tgl_lahir','telepon','email','password','alamat','id_level'];
  public $timestamps = true;
  public $incrementing = false;

  public function level() {
    return $this->belongsTo('LevelModel', 'id_level', 'id_level');
  }

}
?>
