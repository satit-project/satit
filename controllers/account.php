<?php

class Account extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->message="";
        $this->view->employees = [];
        $this->view->jobs = [];
    }

    function render() {
        $this->view->jobs = $this->model->getJobs();
        $this->view->employees = $this->model->getEmployees();
        $this->view->render('account/index');
    }

    function createNewAccount(){
        $userID = $_POST['userID'];
        $name = $_POST['name'];
        $sourname = $_POST['sourname'];
        $job = $_POST['job'];
        $password = md5($_POST['password']);
        $question_1 = $_POST['question_1'];
        $answer_1 = $_POST['answer_1'];
        $question_2 = $_POST['question_2'];
        $answer_2 = $_POST['answer_2'];

        $mensaje ="Creando cuenta...";
        if($this->model->insert(['userID'=>$userID,
                                 'name'=> $name,
                                 'sourname'=> $sourname,
                                 'password'=> $password,
                                 'job'=> $job,
                                 'question_1'=> $question_1,
                                 'answer_1'=> $answer_1,
                                 'question_2'=> $question_2,
                                 'answer_2'=> $answer_2,

                                 ])) {
            $mensaje=  "Nuevo empleado creado";
        }else{
            $mensaje=  "La matricula ya existe ";

        }
        $this->view->mensaje = $mensaje;
        $this->render();
    }

    public function getJobs()
    {
        return $this->model->getJobs();
    }

}

?>
