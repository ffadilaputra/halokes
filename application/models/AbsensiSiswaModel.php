<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;

class AbsensiSiswaModel extends Eloquent {
    protected $table = "absensisiswa";
    protected $primaryKey = 'id_absensisiswa';
    public $timestamps = true;
    protected $fillable = ["kelas", "tahun_ajaran","jam1","jam2","jam3","jam4","jam5","jam6","jam7","jam8","id_users"];
}
