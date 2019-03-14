<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;

class GuruMatpelModel extends Eloquent {
    protected $table = "gurumatpel";
    protected $primaryKey = 'id_gurumatpel';
    public $timestamps = false;
    protected $fillable = ["keterangan", "id_guru","id_masterkelas","id_matpel"];

    public function detailGuru(){
        return $this->belongsTo('GuruModel','id_guru','id_guru');
    }

    public function detailMasterKelas(){
        return $this->belongsTo('KelasModel','id_masterkelas','id_masterkelas');
    }
    public function detailMatpel(){
        return $this->belongsTo('MatpelModel','id_matpel','id_matpel');
    }

}