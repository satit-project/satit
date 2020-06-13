<?php
class Account extends Controller{
    
    function __construct(){
        parent::__construct(); 
        $this->view->message="";
        $this->view->empleados = [];
        $this->view->jobs = [];
    }
    
    function render() {
        $jobs = $this->model->getJobs();
        $this->view->jobs = $jobs;
        $this->view->render('account/index');
    }
    
    function createNewAccount(){
        $userID = $_POST['userID'];
        $password = md5($_POST['password']);
        $name = $_POST['name'];
        $sourname = $_POST['sourname'];
        $job = $_POST['job'];
        $question1 = $_POST['question1'];
        $answer1 = $_POST['answer1'];
        $question2 = $_POST['question2'];
        $answer2 = $_POST['answer2'];
        
        
        if($this->model->insert(['userID'=>$userID,
                                 'name'=> $name,
                                 'sourname'=> $sourname,
                                 'password'=> $password,
                                 'job'=> $job,
                                 'question1'=> $question1,
                                 'answer1'=> $answer1,
                                 'question2'=> $question2,
                                 'answer2'=> $answer2,
                                 
                                 ])) {
            echo "Nuevo empleado creado";
           
        }else{
            echo "error al crear Nuevo empleado ";

        }

        $this->render();
    }
    


}

?>