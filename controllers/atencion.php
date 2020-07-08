<?php

class Atencion extends Controller {

    function __construct(){
        parent::__construct();
    }

    function render() {
        $this->view->render('atencion/index');
    }

    public function recursosHumanos() {
      echo "rh is working";
      $this->redirectHome();

    }

    public function capacitacionyDesarollo() {
      echo "cap y des  is working";
      $this->redirectHome();

    }

    public function finanzas() {
      echo "finanza  is working";
      $this->redirectHome();
    }

    public function redirectHome()
    {
      header('location:'.constant('URL')."userdashboard");

    }
}

?>
