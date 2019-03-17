<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;

class KelompokModel_D extends Eloquent {
    protected $table = "kelompok_d";
    protected $primaryKey = 'id_kelompok_d';
    public $timestamps = false;
    protected $fillable = ["nama_matpel", "id_matpelkelas"];

    public function detailMatpel(){
        return $this->belongsTo('MatpelKelasModel','id_matpelkelas','id_matpelkelas');
    }

}
