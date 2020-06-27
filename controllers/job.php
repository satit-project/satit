<?php

class job extends Controller {

    function __construct(){
        parent::__construct();
    }

    function render() {
        $this->view->render('job/index');
    }

}

?>
