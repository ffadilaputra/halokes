<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class KategoriBeritaModel extends Eloquent {

  protected $table      = 'news_category';
  protected $primaryKey = 'id_news_category';
  protected $fillable   = ['category_name'];
  public $timestamps = true;

}
?>
