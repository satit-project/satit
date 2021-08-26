<?php

class CartaTrabajo extends Controller {

    function __construct(){
        parent::__construct();
        $this->message="";
        $this->statusType="";

    }

    function render() {
        $this->view->render('cartaTrabajo/index');

    }

    public function generarCartaDeTrabajo() {

      $employeeID = $_SESSION['employeeID'];
      $result = $this->model->insert(['employeeID' => $employeeID]);
      if($result == 1){
          $this->message = "Se solicito correctamente la Carta de Trabajo";
          $this->statusType = "alert-success";
      }else{
            $this->message = 'Usted ya tiene una solicitud registrada en proceso';
            $this->statusType = 'alert-warning';
      }
      $this->redirectHome();
    }

  
    public function listaCartas(){

      echo("Lista de cartas funciona");
      $result = $this->model->getLetters();
      var_dump($result);
      return json_encode($result);
    }


    public function redirectHome()
    {
      header('location:'.constant('URL')."userdashboard?message=".$this->message."&statusType=".$this->statusType);

    }

}

?>
