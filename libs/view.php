<?php

class View{


    function __construct(){
        $this->data = "";


    }

    function render($nombre){
        require 'views/'. $nombre . '.php';

    }

    public function setData($data){
        $this->data = $data;
    }
    public function getData(){
        return $this->data;
    }

    public function printData(){
        print_r($this->data);
    }
}

?>
