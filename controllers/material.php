<?php

class material extends Controller {

    function __construct(){
        parent::__construct();
        $param = [];
        $this->message="";
        $this->statusType="";
    }

    function render() {
        $this->view->render('material/index');
    }



    public function materialRequest($materialRequest) {
      $materialID = $materialRequest[0];
      $employeeID = $_SESSION['employeeID'];

      echo "material request working on " . $materialID;
     
      $result = $this->model->insert(['employeeID' => $employeeID, 'materialID'=> $materialID]);
      if( $result == 1){
          $this->message = "La solicitud se envio correctamente.";
          $this->statusType = "alert-success";
        echo $this->message;

      }
      if($result == -1)
      {
        $this->message = 'Ya tiene una solicitud registrada, le atenderemos pronto.';
        $this->statusType = 'alert-warning';
        echo $this->message;

      }
      else{
        echo "<br>Hubo un error al registrar tu solicitud, vuelve a intentarlo";

      }
      
      
      $this->redirectHome();
    }


    public function redirectHome()
    {
      header('location:'.constant('URL')."userdashboard?message=".$this->message."&statusType=".$this->statusType);

    }
}

?>
