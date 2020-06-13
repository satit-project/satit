<?php

class Toast extends Controller{
    
    function __construct(){
        parent::__construct();
        $this->view->message = "";
        
    }
    function setMessage($message)
    {
        $this->message =$message;
        $this->view->render('toast/index');

    }
}
?> 