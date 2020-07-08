<?php

class CartaTrabajo extends Controller {

    function __construct(){
        parent::__construct();
    }

    function render() {
        $this->view->render('cartaTrabajo/index');
    }

    public function generarCartaDeTrabajo() {

      $employeeID = $_SESSION['employeeID'];
      $this->model->insert(['employeeID' => $employeeID]);
    //  header("location:".constant('URL')."userdashboard");
    }



}

?>
