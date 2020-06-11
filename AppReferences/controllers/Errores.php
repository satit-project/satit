<?php

class Errores extends Controller{
    
    function __construct(){
        parent::__construct();
        $this->view->mensaje = "Hubo un error en la solicitud o no existe la pagina";
        $this->view->render('error/index');
    }
}
?> 