<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class AngsuranModel extends Eloquent {
    protected $table = "angsuran";
    protected $primaryKey = 'id_angsuran';
    public $timestamps = true;
    protected $fillable = ["id_santri", "tahap","kelas","tahun_akademik"];

    public function detailSantri(){
      return $this->belongsTo('SantriModel','id_santri','id_santri');
    }
}
