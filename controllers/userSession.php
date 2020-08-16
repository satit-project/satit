<?php

class UserSession extends Controller{
    public $user;

    function __construct(){
        parent::__construct();
        $this->user = new User();
        session_start();
    }

    public function render() {
        $this->view->render('login/index');
    }

   public  function restore(){
      if(isset($_SESSION['userID'])){
          echo "hay session";
          $this->user->setUser($this->getCurrentUser());
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
         //usuario valido, se registra;
         $this->setCurrentUser($userForm);
         echo "bienvenido". $userForm;
         header("location: ".constant('URL').'userdashboard');

      //  $this->view->render('dashboard/index');

      }else {

         $errorLogin =  " usuario y/o pasword incorrecto";
         header("location: ".constant('URL'));
      }
   }

}


    public function setCurrentUser($userInfo) {
        $userData = $this->user->setUser($userInfo);
        $_SESSION["employeeID"] = $this->user->get("employeeID");
        $_SESSION["name"] = $this->user->get("name");
        $_SESSION["job"] = $this->user->get("job");

    }


    public function getUserInfo(){
        return $this->user->getAllData();
    }

    public function closeSession(){
        session_unset();
        session_destroy();
        header("location: ".constant('URL'));

    }
}
?>
