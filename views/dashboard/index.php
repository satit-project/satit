<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
</head>
<body>
   <?php require_once 'views/header.php'; 
      ?>
   
   
   <!--sidenav-->
   <div class="bmd-layout-container bmd-drawer-f-l">
  <header class="bmd-layout-header">
    <div class="navbar navbar-light bg-faded">
      <button class="navbar-toggler" type="button" data-toggle="drawer" data-target="#dw-s1">
        <span class="sr-only">Toggle drawer</span>
        <i class="material-icons">menu</i>
      </button>
      <ul class="nav navbar-nav">
        <li class="nav-item">Admin</li>
      </ul>
    </div>
  </header>
  <div id="dw-s1" class="bmd-layout-drawer bg-faded">
    <header>
      <a class="navbar-brand">Menu</a>
    </header>
    <ul class="list-group">
      <a class="list-group-item">Link 1</a>
      <a class="list-group-item">Link 2</a>
      <a class="list-group-item">Link 3</a>
    </ul>
  </div>
</nav>
<!---- NAV ---->


<!---- TABS ---->
    <div class="row" >
      <div class="col-2">
        <div class="list-group" id="list-tab" role="tablist">
          <a class="list-group-item list-group-item-action active " id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Inicio</a>
          <a class="list-group-item list-group-item-action" id="list-nomina-list" data-toggle="list" href="#list-nomina" role="tab" aria-controls="nomina">Nomina</a>
          <a class="list-group-item list-group-item-action" id="list-prenomina-list" data-toggle="list" href="#list-prenomina" role="tab" aria-controls="prenomina">Prenomina</a>
          <a class="list-group-item list-group-item-action" id="list-vacaciones-list" data-toggle="list" href="#list-vacaciones" role="tab" aria-controls="vacaciones">Vacaciones</a>
          <a class="list-group-item list-group-item-action" id="list-course-list" data-toggle="list" href="#list-course" role="tab" aria-controls="course">Curso</a>
          <a class="list-group-item list-group-item-action" id="list-user-list" data-toggle="list" href="<?php echo "views/account/";?>" role="tab" aria-controls="user">Cuentas</a>
          <a class="list-group-item list-group-item-action" id="list-job-list" data-toggle="list" href="#list-job" role="tab" aria-controls="profile">Puesto</a>
          <a class="list-group-item list-group-item-action" id="list-encuesta-list" data-toggle="list" href="#list-encuesta" role="tab" aria-controls="encuesta">Encuesta</a>
          <a class="list-group-item list-group-item-action" id="list-atencion-list" data-toggle="list" href="#list-atencion" role="tab" aria-controls="encuesta">Atencion</a>
        </div>
      </div>
      <div class="col-8">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list"><?php include_once ("optionHome.php");?></div>
          <div class="tab-pane fade" id="list-course" role="tabpanel" aria-labelledby="list-course-list"><?php include_once ("optionCourse.php");?></div>
          <div class="tab-pane fade" id="list-job" role="tabpanel" aria-labelledby="list-job-list"><?php include_once ("optionJob.php");?></div>
          <div class="tab-pane fade" id="list-user" role="tabpanel" aria-labelledby="list-user-list"><?php echo "views/account/";?></div>
          <div class="tab-pane fade" id="list-nomina" role="tabpanel" aria-labelledby="list-nomina-list">Cargar nomina</div>
          <div class="tab-pane fade" id="list-encuesta" role="tabpanel" aria-labelledby="list-encuesta-list">Resultados de la encuesta satisfaccion del dia de hoy</div>
          <div class="tab-pane fade" id="list-vacaciones" role="tabpanel" aria-labelledby="list-vacaciones-list">Consulta de Vacaciones</div>
          <div class="tab-pane fade" id="list-prenomina" role="tabpanel" aria-labelledby="list-vacaciones-list">Prenomina</div>
          <div class="tab-pane fade" id="list-atencion" role="tabpanel" aria-labelledby="list-vacaciones-list">Atencion</div>
        </div>
      </div>
    </div>
    </div>
  </main>
</div>
<!--sidenav-->
</body>
</html>