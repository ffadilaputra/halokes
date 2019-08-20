<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;

class MatpelKelasModel extends Eloquent {
    protected $table = "matpelkelas";
    protected $primaryKey = 'id_matpelkelas';
    public $timestamps = false;
    protected $fillable = ["jenjang", "id_masterkelas","id_jurusan"];

    public function detailKelas(){
        return $this->belongsTo('KelasModel','id_masterkelas','id_masterkelas');
    }

    public function detailJurusan(){
        return $this->belongsTo('JurusanModel','id_jurusan','id_jurusan');
    }

}