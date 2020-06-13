<?php

class Course extends Controller {
    
    function __construct(){
        parent::__construct();
        $this->view->courses = [];
    }
    
    function render() {
    	$result = $this->model->getCourses();
        $this->view->courses = $result;
        $this->view->render('course/index');
    }

    function newCourse()
    {
    	$title = $_POST['title'];
        $description =$_POST['description'];
        $date =$_POST['date'];
        $hour =$_POST['hour'];
  
        
        
        if($this->model->insert(['title'=>$title,
                                 'description'=> $description,
                                 'date'=> $date,
                                 'hour'=> $hour
                
                                 ])) {
            echo "Nuevo curso creado";
           
        }else{
            echo "error al crear Nuevo curso ";

        }

        $this->render();
    }
    
}

?>