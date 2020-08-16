<?php
include 'libs/user'
class UserSession extends Controller {

    function __construct(){
        parent::__construct();
    }

    function render() {
        $this->view->render('login/index');
    }


    function restore(){
      if(isset($_SESSION['userID'])){
          echo "hay session";
          $user->setUser($userSession->getCurrentUser());
          include_once('libs/app.php');

        }else {
            $this->view->render('login/index');
    }

}


public function validate(){
  if (isset($_POST['userID']) && isset($_POST['password'])){
   // echo "Validacion de login";
     $userForm = $_POST['userID'];
     $passForm = $_POST['password'];
     $userData = $user->userExists($userForm, $passForm);
     
     if($user->userExists($userForm, $passForm)) {
         //echo " usuario validado";
         $userSession->setCurrentUser($userForm);
         $user->setUser($userForm);
         echo "bienvenido". $userForm;
         header("location: dashboard");

      }else {
         $errorLogin =  " usuario y/o pasword incorrecto";
         $this->view->render('login/index');
      }
   }
}



}

?>
