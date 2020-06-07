<?php
// setup files
define('ROOT_DIR', dirname(__FILE__));
define('ROOT_URL', substr($_SERVER['PHP_SELF'], 0, - (strlen($_SERVER['SCRIPT_FILENAME']) - strlen(ROOT_DIR))));
define('DASHBOARD', ROOT_DIR."/resources/view/admin/dashboard.php");
define('COURSE', ROOT_DIR."/resources/view/admin/optionCourse.php");
define('JOB', ROOT_DIR."/resources/view/admin/optionJob.php");
define('USER', ROOT_DIR."/resources/view/admin/optionUser.php");
define('CONN',ROOT_DIR."/resources/php/conn.php");
define('CONNECTION',ROOT_DIR."/resources/php/Connection.php");
define('CREATEACCOUNT',ROOT_DIR."/resources/php/create-account.php");

// Models
define('NOMINAMODEL',ROOT_DIR."/resources/Model/NominaModel.php");
define('COURSEMODEL', ROOT_DIR."/resources/Model/CourseModel.php");
define('CARTATRABAJOMODEL', ROOT_DIR."/resources/Model/CartaTrabajoModel.php");
define('ACCOUNTMODEL', ROOT_DIR."/resources/Model/AccountModel.php");
define('SECURITYQUESTIONMODEL', ROOT_DIR."/resources/Model/SecurityQuestionModel.php");
define('JOBMODEL', ROOT_DIR."/resources/Model/JobModel.php");

// Controllers
define('NOMINACONTROLLER',ROOT_DIR."/resources/Controller/NominaController.php");
define('COURSECONTROLLER',ROOT_DIR."/resources/Controller/CourseController.php");
define('MENUCONTROLLER',ROOT_URL."/resources/Controller/MenuController.php");
define('ACCOUNTCONTROLLER',ROOT_URL."/resources/Controller/AccountController.php");
define('JOBCONTROLLER',ROOT_URL."/resources/Controller/JobController.php");

//interface
define('MODELINTERFACE',ROOT_DIR."/resources/Model/Model.php");


?>