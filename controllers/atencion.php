<?php

class Atencion extends Controller {

    function __construct(){
        parent::__construct();
        $param = [];
        $this->message="";
        $this->statusType="";
    }

    function render() {
        $this->view->render('atencion/index');
    }



    public function newAppointment($departmentID) {
      $employeeID = $_SESSION['employeeID'];
      $department = $departmentID[0];
      $result = $this->model->insert(['employeeID' => $employeeID, 'departamento_id'=> $department]);
      if( $result == 1){
          $this->message = "La solicitud se envio correctamente.";
          $this->statusType = "alert-success";
      }else{
            $this->message = 'Ya tiene una solicitud registrada, le atenderemos pronto.';
            $this->statusType = 'alert-warning';
      }
      $this->redirectHome();
    }


    public function redirectHome()
    {
      header('location:'.constant('URL')."userdashboard?message=".$this->message."&statusType=".$this->statusType);

    }
}

?>
