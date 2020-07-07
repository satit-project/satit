<?php

class Atencion extends Controller {

    function __construct(){
        parent::__construct();
    }

    function render() {
        $this->view->render('atencion/index');
    }

}

?>
