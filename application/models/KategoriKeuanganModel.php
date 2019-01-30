<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class KategoriKeuanganModel extends Eloquent {

  protected $table      = 'kategori_keuangan';
  protected $primaryKey = 'id_kategori_keuangan';
  protected $fillable   = ['nama','biaya'];
  public $timestamps = true;

}
?>
