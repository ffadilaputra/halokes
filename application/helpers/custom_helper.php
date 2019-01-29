<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('old')){
    function old($key, $default = ""){
        $ci =& get_instance();

        if($ci->session->flashdata('old')) {
            return $ci->session->flashdata('old')[$key];
        } else {
            return $default;
        }
    }
}

if( ! function_exists('convertRupiah')){
  function convertRupiah($value) {
      return 'Rp ' . number_format($value);
  }
}
