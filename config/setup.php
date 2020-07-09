<?php
//include_once('models/accountmodel.php');
class SetupAccount extends Controller
{
  public $employeeID="999111";
  public $name="admin";
  public $sourname="satit";
  public $password= "proyecto2020!";
  public $job=1;


  public function __construct()
  {
    parent::__construct();
    $account = ['employeeID'=> $this->employeeID,
                'name'=> $this->name,
                'sourname'=> $this->sourname,
                'password'=> md5($this->password),
                'job'=> $this->job,
                'question_1'=> "",
                'answer_1'=> "",
                'question_2'=> "",
                'answer_2'=> ""];
    $this->create($account);

  }


  public function create($data){
    $accountModel = new AccountModel();
    try {
      $accountModel->insert($data);

    } catch (Exception $e) {
      echo "error";
    }


  }

}

 ?>
