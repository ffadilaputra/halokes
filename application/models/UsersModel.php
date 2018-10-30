<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class UsersModel extends Eloquent {

  protected $table      = 'users';
  protected $primaryKey = 'id_users';
  protected $fillable   = ['email','password'];
  public $timestamps = true;

}
?>
