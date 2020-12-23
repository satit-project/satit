<?php
require_once("material.php");
class UserDashboard extends Controller {

    function __construct(){
        parent::__construct();
        $requests;
    }

    function render() {

        $this->view->render('userDashboard/index');
        $this->view->render('material/index');
    }


    
}

?>
