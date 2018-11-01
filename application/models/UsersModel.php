<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class UsersModel extends Eloquent {

  protected $table      = 'users';
  protected $primaryKey = 'id_users';
  protected $fillable   = ['id_users','nama_lengkap','tempat_lahir','tgl_lahir','telepon','email','password','id_level','id_alamat'];
  public $timestamps = true;
  public $incrementing = false;

}
?>
