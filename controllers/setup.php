<?php
class Setup extends Controller
{
  public $employeeID="999111";
  public $name="admin";
  public $sourname="satit";
  public $password= "proyecto2020!";
  public $job=1;


  public function __construct()
  {
    echo "setup construct is working ...";
    parent::__construct();


  }

  function render() {
      $this->view->jobs = $this->model->getJobs();
      $this->view->employees = $this->model->getEmployees();
      $this->view->render('setup/index');
  }



  public function create(){

    echo "<br> setup create starting...<br>";

    try {
      $this->model->insert(['employeeID'=> $this->employeeID,
                  'name'=> $this->name,
                  'sourname'=> $this->sourname,
                  'password'=> md5($this->password),
                  'job'=> $this->job,
                  'question_1'=> "",
                  'answer_1'=> "",
                  'question_2'=> "",
                  'answer_2'=> ""]);
          echo "setup create succesfully <br>";
          header("location:".constant('URL'));
    } catch (Exception $e) {
      echo "error";
      header("location".constant('URL'));

    }


  }

}

 ?>
