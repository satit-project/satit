<?php

class ayuda extends Controller {
    
    function __construct(){
        parent::__construct();
    }
    
    function render() {
        $this->view->render('ayuda/index');
    }
    
}

?>