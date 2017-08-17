<?php

class avishkar extends controller{

    public function index(){
        echo "fifi";
        // $this->view("avishkar");
    }

    public function submit($get, $post){
        var_dump($get);
        var_dump($post);
        // header("Locaton: http://takshak.in");
    }

}