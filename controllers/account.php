<?php
class Account extends Controller{
    
    function __construct(){
        parent::__construct(); 
        $this->view->message="";
        $this->view->employees = [];
        $this->view->jobs = [];
    }
    
    function render() {
        $this->view->employees = $this->model->getEmployees();
        $this->view->jobs = $this->model->getJobs();
        $this->view->render('account/index');
    }
    
    function createNewAccount()
    {
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
    
    function viewEmployee($param = null) {
        $userID = $param[0];
        $this->view->employees = $this->model->getEmployees();
        $employee = $this->model->getById($userID);
        $this->view->jobs = $this->model->getJobs();

        $_SESSION['userID'] = $employee->get('userID');
        $this->view->mensaje = "";
        $this->view->employee  = $employee;
        $this->view->render('account/update');
        
    }
    
    function updateEmployee ()
    {
            $userID = $_SESSION['userID'];
            $name = $_POST['name'];
            $job = $_POST['job'];
            $password = md5($_POST['password']);
            $sourname = $_POST['sourname'];
            $question1 = $_POST['question1'];
            $answer1 = $_POST['answer1'];
            $question2 = $_POST['question2'];
            $answer2 = $_POST['answer2'];
            
            unset($_SESSION['userID']);
            if($this->model->update(['userID'=>$userID,
                                    'name'=>$name, 
                                    'password'=>$password, 
                                    'sourname'=>$sourname,
                                    'job'=>$job,
                                    'question1'=>$question1,
                                    'answer1'=>$answer1,
                                    'question2'=>$question2,
                                    'answer2'=>$answer2
                                    
                                    ])){
                $employee = new User();
                $employee->set('userID',$userID);
                $employee->set('name',$name);
                $employee->set('sourname',$sourname);
                $employee->set('name',$job);
                $employee->set('question1',$question1);
                $employee->set('answer1',$answer1);
                $employee->set('question2',$question2);
                $employee->set('answer2',$answer2);
                
                $this->view->emmployee = $employee;
                $this->view->mensaje = "Empleado actualizado correctamente";


            }else{
                // error
                $this->view->mensaje = "No se pudo actualizar el Empleado";

            }
            $this->view->employees = $this->model->getEmployees();
            $this->view->jobs = $this->model->getJobs();
            
        $this->view->render('account/index');
    }


}

?>