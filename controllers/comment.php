<?php

class comment extends Controller {

    function __construct(){
        parent::__construct();
        $param = [];
        $this->message="";
        $this->statusType="";
    }

    function render() {
        $this->view->render('comment/index');
    }



    public function sendComment() {
      $comment = $_REQUEST['commentForm'];
      $employeeID = $_SESSION['employeeID'];

      echo "Sending comments...";
     
      $result = $this->model->insert(['employeeID' => $employeeID, 'comment'=> $comment]);
      if( $result == 1){
          $this->message = "Gracias por sus comentarios, son de gran ayuda para nosotros.";
          $this->statusType = "alert-success";
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
