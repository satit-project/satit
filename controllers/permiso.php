<?php

class permiso extends Controller {

    function __construct(){
        parent::__construct();
    }

    function render() {
        $this->view->render('permiso/index');
    }

}

?>
