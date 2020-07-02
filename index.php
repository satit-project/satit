<?php

// libs for working app
require_once 'libs/database.php';
require_once 'libs/controller.php';
require_once 'libs/model.php';
require_once 'libs/app.php';
require_once 'libs/view.php';
// controllers
require_once 'controllers/Errores.php';
require_once 'controllers/ayuda.php';
require_once 'controllers/userSession.php';
// models
require_once 'models/user.php';
require_once 'models/job.php';
// config file
require_once 'config/config.php';
//require_once 'config/setup.php';

///////////////////////////////////
// SETUP -DELETE AFTER RUNNING
//$setup = new SetupAccount();
//////////////////////////////////

$app = new App();






?>
