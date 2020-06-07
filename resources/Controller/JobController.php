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
        include_once JOBMODEL;
        echo "create Job option was selected<br>";
        // create new Job object
        $job = new JobModel($_REQUEST['job']);
        // save to database
        $job->save();
    break;
    
    default:
    echo "<br>Try again with new option<br>";
    break;
}


?>