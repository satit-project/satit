<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo(URL)?>resources/css/keyboard.css">


</head>

    <title>Principal</title>
</head>
  <?php require_once('views/plugins.php') ?>
<body>
<navbar class="navbar navbar-dark bg-dark" id="topNav">
</br>
  <p  style="color:white">Bienvenido: <?php echo $_SESSION['name'];?></p>

</navbar>

<!-- Display status message -->
<?php if(!empty($_REQUEST['message']) && !empty($_REQUEST['statusType'])){ ?>
<div class="col-xs-12">
    <div class="alert <?php echo $_REQUEST['statusType']; ?>"><?php echo $_REQUEST['message']; ?></div>
</div>
<?php } ?>


<!---principal container--->
<div class="container-fluid row">

<div class="card col-3 card-nborder">
						<div class="card-body">
							<h5 class="card-title">Nomina</h5>
							<h6 class="card-subtitle mb-2 text-muted">Actual</h6>
							<div class="user-nomina col-12">
							<p class="card-text">$500.00</p>
							</div>
						</div>
					</div>


					<div class="card col-3 card-nborder">
						<div class="card-body">
							<h5 class="card-title">Prenomina</h5>
							<h6 class="card-subtitle mb-2 text-muted">Proxima</h6>
							<div class="user-nomina col-12">
							<p class="card-text">$500.00</p>
							</div>
						</div>
					</div>

					<div class="card col-3 card-nborder">
						<div class="card-body">
							<h5 class="card-title">Vacaciones</h5>
							<h6 class="card-subtitle mb-2 text-muted">Dias acumulados</h6>
							<div class="user-nomina col-12">
							<p class="card-text"> 5 Dias</p>
							</div>
						</div>
					</div>


     <!---left container--->
     <div class="col-md-6">
			    <!--logo---->
	
					<!---user info---->
					<div class="card col-12 text-white bg-dark mb-3">
						<div class="card-body">
							<h5  id="user-name" class="card-title"><?php echo $_SESSION["name"];?></h5>
							<h6 id="user-code" class="card-subtitle mb-2 text-muted">
							    <?php echo $_SESSION['job'] ?>
                  
							</h>
							<h6 id="user-job" class="card-subtitle mb-2 text-muted">
              <?php echo $_SESSION['employeeID'] ?>
							</h6>
						</div>
					</div>

          <!---Solicitar carta--->
					<div class="card col-12">
						<div class="card-body">
							<h5 class="card-title">Solicitar carta de trabajo</h5>
							<h6 class="card-subtitle mb-2 text-muted">Apareceran los datos de esta pantalla</h6>
              <button type="button" class="btn btn-primary btn col-3" data-toggle="modal" data-target="#cartaDeTrabajo">
                Solicitar
              </button>
						</div>
					</div><!---Solicitar carta--->

 					<!---Solicitar atencion--->
           <div class="card col-12">
						<div class="card-body">
							<h5 class="card-title">Solicitar atencion</h5>
							<h6 class="card-subtitle mb-2 text-muted">Haz clic departamento donde te atenderemos</h6>
              <button type="button" class="btn btn-primary btn col-3" data-toggle="modal" data-target="#recursosHumanos">
                Atencion
              </button>
						</div>

					</div><!---Solicitar atencion--->

  
			</div><!---left container--->

			 <!---right container--->
			<div class="col-md-6">
				<div class="row">


					<!---Enviar sugerencias--->
				   <div class="card col-12">
					   <div class="card-body">
						   <h5 class="card-title">Comentarios</h5>
						   <h6 class="card-subtitle mb-2 text-muted">Envianos tus comentarios</h6>
						   <form method="post" action="comment/sendComment" >
							   <input type="text" class="col-6  input-tex  use-keyboard-input" maxlength="255" name="commentForm" id="commentForm">
							   <input type="submit" class="btn btn-success col-3" value="Enviar" >
						   </form>

					   </div>
				   </div><!---Enviar sugerencias--->


 					<!---Inscribirme al acurso--->
					<div class="card col-12">
						<div class="card-body">
							<h5 class="card-title">Curso</h5>
							<h6 class="card-subtitle mb-2 text-muted">Haz clic para inscribirte</h6>
              <button type="button" class="btn btn-primary btn col-3" data-toggle="modal" data-target="#curso">
                Inscribirme
              </button>

						</div>
					</div><!---Inscribirme al acurso--->
          <a class="btn btn-secondary main-button col-3" href="<?php echo constant('URL');?>userSession/closeSession">Salir</a>
          <a class="btn btn-secondary main-button col-6" href="#">Cambiar Contraseña</a>
				</div>
			</div><!---right container--->
		</div><!---principal container--->

  <!-- Modal CARTA TRABAJO-->
    <div class="modal fade" id="cartaDeTrabajo" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Solicitud de Carta de trabajo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Solicitar carta de trabajo para :<br>
            <br>Emmanuel Nuño Estrella
            <br>Administrador<br>1208750
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secon  dary" data-dismiss="modal">Close</button>
            <a type="button" class="btn btn-primary" href="cartatrabajo/generarCartaDeTrabajo">Aceptar</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal RECURSOS HUMANOS-->
    <div class="modal fade" id="recursosHumanos" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Atencion</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Te atenderemos en: RECURSOS HUMANOS
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a type="button" class="btn btn-primary" href="atencion/newAppointment/1">Aceptar</a>
          </div>
        </div>
      </div>
    </div>


    <!-- Modal CAPACITACIÓN Y DESARROLLO-->
    <div class="modal fade" id="capacitacionydesarollo" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Atencion</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Te atenderemos en: CAPACITACIÓN Y DESARROLLO
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a type="button" class="btn btn-primary" href="atencion/newAppointment/2">Aceptar</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Finanzas-->
    <div class="modal fade" id="finanzas" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Atencion</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Te atenderemos en: FINANZAS
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a type="button" class="btn btn-primary" href="atencion/newAppointment/3" name="department" value=1>Aceptar</a>
          </div>
        </div>
      </div>
    </div>




        <!-- Modal CURSO-->
        <div class="modal fade" id="curso" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Curso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Deseas inscribirte al curso?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Aceptar</button>
              </div>
            </div>
          </div>
        </div>
        <script src="<?php echo(URL)?>resources/js/keyboard.js"></script>
       <script src="<?php echo(URL)?>/public/js/userDashboard.js"></script>
</body>
</html>
