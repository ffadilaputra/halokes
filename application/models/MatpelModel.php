<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;

class MatpelModel extends Eloquent {
    protected $table = "matpel";
    protected $primaryKey = 'id_matpel';
    public $timestamps = false;
    protected $fillable = ["nama_matpel", "kkmpengetahuan","kkmketerampilan"];

}