<?php

class Nomina extends Controller {
    
    function __construct(){
        parent::__construct();
    }
    
    function render() {
        $this->view->render('nomina/index');
    }
    
}

?>