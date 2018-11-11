<?php

class News extends MY_Controller {

    public function index(){
        $data['post'] = BeritaModel::all();
        $encode = json_encode($data['post']);
        echo $encode;
    }
}
?>