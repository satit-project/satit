<?php
    include_once ("../../init.php");
    // get option selected from user
    $option ="";
    
    
    
    // available options
    switch($option)
    {
        case "admin":
            
            $connection = new $Connection();
            $connection->connect();
            $conn = $connection->__get('status');
            
            echo "Welcome Admin";
        break;
        default:
            echo "<br>Try again with new option<br>";
        break;
    }



?>