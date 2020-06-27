<?php

class Prenomina extends Controller {

    function __construct(){
        parent::__construct();
    }

    function render() {
        $this->view->render('prenomina/index');
    }

}

?>
