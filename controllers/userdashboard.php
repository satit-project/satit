<?php

class UserDashboard extends Controller {

    function __construct(){
        parent::__construct();
    }

    function render() {
        $this->view->render('userDashboard/index');
    }

}

?>
