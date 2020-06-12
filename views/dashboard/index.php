<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="../../js/plugins/jquery.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
     <title>Panel de control</title>
</head>
<body>
<!---- NAV ---->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">H&R | SATIT</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
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
<!---- TABS ---->


</body>
<script>
/*$(document).ready(() => {
  $('#list-job').load('createJob.php');
  $('#list-course').load('createCourse.php');
});*/
/*$("#list-job-list").click("#list-job").load("optionJob.php");
$("#list-course-list").click("#list-course").load("optionCourse.php");
$("#list-user-list").click("#list-user").load("optionUser.php");*/
</script>
</html>



