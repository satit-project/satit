<?php

class logout extends Controller {

    function __construct(){
        parent::__construct();
        include_once 'controllers/userSession.php';
        
        $userSession = new UserSession();
        $userSession->closeSession();
    }

    function render() {
        $this->view->render('login/index');
    }

}

?>
