<?php
define('ROOT_DIR', dirname(__FILE__));
define('ROOT_URL', substr($_SERVER['PHP_SELF'], 0, - (strlen($_SERVER['SCRIPT_FILENAME']) - strlen(ROOT_DIR))));
define('DASHBOARD', ROOT_URL."/resources/view/admin/dashboard.php");
define('COURSE', ROOT_DIR."/resources/view/admin/optionCourse.php");
define('JOB', ROOT_DIR."/resources/view/admin/optionJob.php");
define('USER', ROOT_DIR."/resources/view/admin/optionUser.php");
define('CONN',ROOT_DIR."/resources/php/conn.php");
define('CONNECTION',ROOT_DIR."/resources/php/Connection.php");

// Models
define('NOMINAMODEL',ROOT_DIR."/resources/Model/NominaModel.php");
define('COURSEMODEL', ROOT_DIR."/resources/Model/Course.php");
// Controllers
define('NOMINACONTROLLER',ROOT_DIR."/resources/Controller/NominaController.php");


?>