<?php

class userSession extends Controller{
    
    function __construct(){
        parent::__construct();
        session_start();
    }
    
    public function setCurrerntUser($userID) {
        $_SESSION['user']= $userID;
    }
    
    public function getCurrentUser(){
        return $_SESSION['userID'];
    }
    
    public function closeSession(){
        session_unset();
        session_destroy();
    }
}
?> 