<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;

class KelasModel extends Eloquent {
    protected $table = "masterkelas";
    protected $primaryKey = 'id_masterkelas';
    public $timestamps = false;
    protected $fillable = ["nama_kelas", "jenjang","kode_ruangan","ukuran_ruangan","walikelas"];

    public function detailWaliKelas(){
        return $this->belongsTo('GuruModel','walikelas','id_guru');
    }

}