<?php

class Dashboard extends Controller {
    
    function __construct(){
        parent::__construct();
        $this->view->option="";
    }
    
    function render() {
        $this->view->render('dashboard/index');
    
        }
       
    function nomina()
    {
        $this->view->render('nomina/index');
    }
    
}

?>