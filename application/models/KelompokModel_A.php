<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;

class KelompokModel_A extends Eloquent {
    protected $table = "kelompok_a";
    protected $primaryKey = 'id_kelompok_a';
    public $timestamps = false;
    protected $fillable = ["nama_matpel", "id_matpelkelas"];

    public function detailMatpel(){
        return $this->belongsTo('MatpelKelasModel','id_matpelkelas','id_matpelkelas');
    }

}
