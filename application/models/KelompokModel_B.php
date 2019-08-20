<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;

class KelompokModel_B extends Eloquent {
    protected $table = "kelompok_b";
    protected $primaryKey = 'id_kelompok_b';
    public $timestamps = false;
    protected $fillable = ["nama_matpel", "id_matpelkelas"];

    public function detailMatpel(){
        return $this->belongsTo('MatpelKelasModel','id_matpelkelas','id_matpelkelas');
    }

}
