<?php

class dashboard extends Controller {

    function __construct(){
        parent::__construct();
    }

    function render() {
        $this->view->render('dashboard/index');
    }

}

?>
