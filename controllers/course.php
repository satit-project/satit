<?php

class Course extends Controller {

    function __construct(){
        parent::__construct();
    }

    function render() {
        $this->view->render('course/index');
    }

}

?>
