<?php
    include_once 'controllers/userSession.php';

    $userSession = new UserSession();
    $userSession->closeSession();

    header("location: views/login/");
?>
