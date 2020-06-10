<?php
include_once("../../factory.php");
// get option selected from user
    $option = $_REQUEST["option"];
    // todo check-login credentials
    // todo Validate : verify empty fields

// available options
switch($option)
{
    case "up":
        echo "create account option was selected<br>";
        include_once ACCOUNTMODEL;
        include_once SECURITYQUESTIONMODEL;

        // create new account object
        $account = new AccountModel( 
                                     $_REQUEST['employeeID'],
                                     $_REQUEST['name'], 
                                     $_REQUEST['sourname'],  
                                     password_hash($_REQUEST['password'], PASSWORD_DEFAULT),
                                     $job = $_REQUEST['jobID']);
        
       
        // create new security questions object
        $securityQuestion = new SecurityQuestionModel($_REQUEST['Seg_pregunta_1'],
                                                      password_hash($_REQUEST['R_pregunta_1'], PASSWORD_DEFAULT), 
                                                      $_REQUEST['Seg_pregunta_2'], 
                                                      password_hash($_REQUEST['R_pregunta_2'], PASSWORD_DEFAULT),
                                                      $_REQUEST['employeeID']);
        
       // save to database
       $account->save();
       $securityQuestion->save();
       return header(DASHBOARD,true);
    break;
    case "update":
        echo "update account";
    break;
    case "up":
        echo "down account";
    break;
    default:
    echo "Invalid option";    
    break;
}




?>