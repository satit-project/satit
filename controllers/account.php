<?php

class Account extends Controller{
    
    function __construct(){
        parent::__construct(); 
        $this->view->mensaje="";
        $this->view->empleados = [];

    }
    
    function render() {
        $this->view->render('account/index');

        
    }
    
    function createNewAccount(){
        $userID = $_POST['userID'];
        $name = $_POST['name'];
        $sourname = $_POST['sourname'];
        $job = $_POST['job'];
        $question1 = $_POST['question1'];
        $answer1 = $_POST['answer1'];
        $question2 = $_POST['question2'];
        $answer2 = $_POST['answer2'];
        
        $mensaje ="";
        
        if($this->model->insert(['userID'=>$userID,
                                 'name'=> $name,
                                 'sourname'=> $sourname,
                                 'job'=> $job,
                                 'question1'=> $question1,
                                 'answer1'=> $answer1,
                                 'question2'=> $question2,
                                 'answer2'=> $answer2,
                                 
                                 ])) {
            $mensaje=  "Nuevo alumno creado";
        }else{
            $mensaje=  "La matricula ya existe ";

        }
        $this->view->mensaje = $mensaje;
        $this->render();
    }
    
    public function getJobs()
    {
        $this->model->getJobs();
    }

}

?>