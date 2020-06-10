<?php

class ayuda extends Controller {
    
    function __construct(){
        parent::__construct();
        $this->view->render('ayuda/index');
    }
    
}

?>