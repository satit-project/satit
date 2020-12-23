<?php
class material extends Controller {

    function __construct(){
        parent::__construct();
        $param = [];
        $this->message="";
        $this->statusType="";
        $this->employeeID = $_SESSION['employeeID'];
        $this->status_request;
        $this->data[]= "Hola mundo";
    }

    function render() {
       $this->view->setData($this->data);
       $this->view->printData();
       $this->view->render('material/index',"hola mundo");
    }

    public function materialRequest() {
        $employeeID = $this->employeeID;
      
        $result = $this->model->insert(['employeeID' => $employeeID]);
        if( $result == 1){
            $this->message = "La solicitud se envio correctamente.";
            $this->statusType = "alert-success";
            $this->status_request ="false";
             echo $this->message;

        }
        else{
          $this->message = 'Ya tiene una solicitud registrada, le atenderemos pronto.';
          $this->statusType = 'alert-warning';
          $this->status_request ="false";
          echo $this->message;
        }
        $this->redirectHome();
    }


    public function redirectHome()
    {
        header('location:'.constant('URL')."userdashboard?message=".$this->message."&statusType=".$this->statusType);

    }

}

?>
