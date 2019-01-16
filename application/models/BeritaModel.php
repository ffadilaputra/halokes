<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class BeritaModel extends Eloquent {

  protected $table      = 'news';
  protected $primaryKey = 'id_news';
  protected $fillable   = ['title','thumb','id_news_category','description','posted_by'];
  public $timestamps = true;

  public function detailNews(){
    return $this->belongsTo('UsersModel','posted_by','id_users');
  }

}
?>
