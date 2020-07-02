<?php

class UserSession extends Controller{

    function __construct(){
        parent::__construct();
        session_start();
        $this->user = new User();
    }

    public function render() {
        $this->view->render('login/index');
    }

   public  function restore(){
      if(isset($_SESSION['userID'])){
          echo "hay session";
          $this->user->setUser($userSession->getCurrentUser());
          echo "else restore";

        //  header("location: ".constant('URL').'dashboard');

        }else {
                echo "else restore";
            //$this->view->render('login/index');
    }

}


public function validate(){

  if (isset($_POST['employeeID']) && isset($_POST['password'])){
   // echo "Validacion de login";
     $userForm = $_POST['employeeID'];
     $passForm = $_POST['password'];
     echo "validating...";
     if($this->user->userExists($userForm, $passForm)) {
         //echo " usuario validado";
         $this->setCurrentUser($userForm);
         $this->user->setUser($userForm);
         echo "bienvenido". $userForm;
         header("location: ".constant('URL').'dashboard');

      //  $this->view->render('dashboard/index');

      }else {

         $errorLogin =  " usuario y/o pasword incorrecto";
         header("location: ".constant('URL'));
      }
   }

}


    public function setCurrentUser($employeeID) {
        $_SESSION['employeeID']= $employeeID;
    }

    public function getCurrentUser(){
        return $_SESSION['employeeID'];
    }

    public function closeSession(){
        session_unset();
        session_destroy();
        header("location: ".constant('URL'));

    }
}
?>
