<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;

class GuruModel extends Eloquent {
    protected $table = "guru";
    protected $primaryKey = 'id_guru';
    public $timestamps = false;
    protected $fillable = ["tgl_masuk", "jabatan","matpel","id_users"];

    public function detailGuru(){
        return $this->belongsTo('UsersModel','id_users','id_users');
    }

}