<?php

// libs for working app
require_once 'libs/database.php';
require_once 'libs/controller.php';
require_once 'libs/model.php';
require_once 'libs/app.php';
require_once 'libs/view.php';
require_once 'libs/logout.php';
// config file
require_once 'config/config.php';
// controllers
require_once 'controllers/Errores.php';
require_once 'controllers/ayuda.php';
require_once 'controllers/userSession.php';
//models
require_once 'models/user.php';
require_once 'models/job.php';

$userSession = new UserSession();
$user = new User();


if(isset($_SESSION['userID'])){
    echo "hay session";
    $user->setUser($userSession->getCurrentUser());
    include_once('views/dashboard/index.php');

}elseif (isset($_POST['userID']) && isset($_POST['password'])){
   // echo "Validacion de login";
     $userForm = $_POST['userID'];
     $passForm = $_POST['password'];
     
     if($user->userExists($userForm, $passForm)) {
         //echo " usuario validado";
         $userSession->setCurrentUser($userForm);
         $user->setUser($userForm);
        header('location: dashboard');
         
     }else{
         $errorLogin =  " usuario y/o pasword incorrecto";         
         include_once('libs/app.php');
         
          }
}else{
    include_once('libs/app.php');
}

$app = new App();


?>