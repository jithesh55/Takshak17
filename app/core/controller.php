<?php

class controller{

    protected function filteroutput($string){
    }
    
    protected function view($view, $data = []){
        require_once "../app/views/".$view.".php";
    }

}