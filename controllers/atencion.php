<?php

class Atencion extends Controller {

    function __construct(){
        parent::__construct();
        $param = [];
    }

    function render() {
        $this->view->render('atencion/index');
    }



    public function newAppointment($departmentID) {
      echo "cap y des is working";
      $employeeID = $_SESSION['employeeID'];
      $department = $departmentID[0];
      echo $department;
      if($this->model->insert(['employeeID' => $employeeID, 'departamento_id'=> $department])){
          $this->view->message = "Se solicito correctamente Atencion en Capacitacion y Desarrollo";
      }else{
            $this->view->message = 'Error al solicitar carta de trabajo';
      }

    //  $this->redirectHome();
    }


    public function redirectHome()
    {
      header('location:'.constant('URL')."userdashboard");

    }
}

?>
