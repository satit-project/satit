<?php

class Curso extends Controller {

    function __construct(){
        parent::__construct();
    }

    function render() {
        $this->view->render('curso/index');
    }

}

?>
