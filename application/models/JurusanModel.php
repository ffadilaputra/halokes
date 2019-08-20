<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;

class JurusanModel extends Eloquent {
    protected $table = "jurusan";
    protected $primaryKey = 'id_jurusan';
    public $timestamps = false;
    protected $fillable = ["nama_jurusan", "keterangan"];

}