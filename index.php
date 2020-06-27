<?php

// libs for working app
require_once 'libs/database.php';
require_once 'libs/controller.php';
require_once 'libs/model.php';
require_once 'libs/app.php';
require_once 'libs/view.php';
// config file
require_once 'config/config.php';
// controllers
require_once 'controllers/Errores.php';
require_once 'controllers/ayuda.php';
require_once 'controllers/userSession.php';
// models
require_once 'models/user.php';
require_once 'models/job.php';

$userSession = new UserSession();
$user = new User();
$app = new App();

if(isset($_SESSION['userID'])){
    echo "hay session";
    $user->setUser($userSession->getCurrentUser());
    include_once('libs/app.php');

}elseif (isset($_POST['userID']) && isset($_POST['password'])){
   // echo "Validacion de login";
     $userForm = $_POST['userID'];
     $passForm = $_POST['password'];

     if($user->userExists($userForm, $passForm)) {
         //echo " usuario validado";
         $userSession->setCurrentUser($userForm);
         $user->setUser($userForm);

         include_once('libs/app.php');

     }else{
         $errorLogin =  " usuario y/o pasword incorrecto";
         /// ONLY FOR TESTING, NEED TO ((REMOVE))

         include_once('libs/app.php');

          }
}else{
    include_once('libs/app.php');
}




?>
