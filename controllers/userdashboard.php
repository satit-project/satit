<?php

class UserDashboard extends Controller {

    function __construct(){
        parent::__construct();
        $this->view->message="";
    }

    function render() {
        $this->view->render('userDashboard/index');
    }

}

?>
