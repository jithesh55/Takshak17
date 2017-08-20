<?php

class controller{

    protected function filteroutput($string){
    }
    
    protected function view($view, $data = array()){
        require_once __DIR__."/../views/".$view.".php";
    }

}