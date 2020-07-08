<?php

class Repuestos extends Controller {

    function __construct(){
        parent::__construct();
    }

    function render() {
        $this->view->render('repuestos/index');
    }

    public function lentes(){
      echo "solicitando lentes...";
    }

    public function guantes(){
      echo "solicitando guantes...";
    }

    public function cubrebocas(){
      echo "solicitando cubrebocas...";
    }
}

?>
