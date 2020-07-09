<?php

class CartaTrabajo extends Controller {

    function __construct(){
        parent::__construct();
        $this->view->message= "";
    }

    function render() {
        $this->view->render('cartaTrabajo/index');
  
    }

    public function generarCartaDeTrabajo() {

      $employeeID = $_SESSION['employeeID'];
      if($this->model->insert(['employeeID' => $employeeID])){
          $this->view->message = "Se solicito correctamente la Carta de Trabajo";
      }else{
            $this->view->message = 'Error al solicitar carta de trabajo';
      }
      header("location:".constant('URL')."userdashboard");

    }



}

?>
