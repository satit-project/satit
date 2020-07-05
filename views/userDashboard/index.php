<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="<?php echo constant('URL');?>public/css/userdashboard.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="../css/keyboard.css">
	<script src="../js/keyboard.js"></script>
</head>

    <title>Principal</title>
</head>
  <?php require_once('views/plugins.php') ?>
<body>
<navbar class="navbar navbar-dark bg-dark">
</br>
</navbar>
<!---principal container--->
<div class="container-fluid row">

		 <!---left container--->
     <div class="col-md-6">
			    <!--logo---->
					<div class="logo-container">
					</div>

					<!---user info---->
					<div class="card col-12 text-white bg-dark mb-3">
						<div class="card-body">
							<h5  id="user-name" class="card-title">Emmanuel Nuño Estrella</h5>
							<h6 id="user-code" class="card-subtitle mb-2 text-muted">
							    1208750
							</h>
							<h6 id="user-job" class="card-subtitle mb-2 text-muted">
							    Administrador
							</h6>
						</div>
					</div>


					<!---nomina---->
					<div class="card col-4 card-nborder">
						<div class="card-body">
							<h5 class="card-title">Nomina</h5>
							<h6 class="card-subtitle mb-2 text-muted">Actual</h6>
							<div class="user-nomina col-12">
							<p class="card-text">$500.00</p>
							</div>
						</div>
					</div>


					<div class="card col-4 card-nborder">
						<div class="card-body">
							<h5 class="card-title">Prenomina</h5>
							<h6 class="card-subtitle mb-2 text-muted">Proxima</h6>
							<div class="user-nomina col-12">
							<p class="card-text">$500.00</p>
							</div>
						</div>
					</div>

					<div class="card col-4 card-nborder">
						<div class="card-body">
							<h5 class="card-title">Vacaciones</h5>
							<h6 class="card-subtitle mb-2 text-muted">Dias acumulados</h6>
							<div class="user-nomina col-12">
							<p class="card-text"> 5 Dias</p>
							</div>
						</div>
					</div>



			</div><!---left container--->

			 <!---right container--->
			<div class="col-md-6">
				<div class="row">

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
                Rec.Hum
              </button>
              <button type="button" class="btn btn-primary btn col-3" data-toggle="modal" data-target="#capacitacionydesarollo">
                Cap. Y Des.
              </button>
              <button type="button" class="btn btn-primary btn col-3" data-toggle="modal" data-target="#finanzas">
                Finanzas.
              </button>
						</div>

					</div><!---Solicitar atencion--->

 					<!---Solicitar repuestos--->
					<div class="card col-12">
						<div class="card-body">
							<h5 class="card-title">Solicitar repuestos</h5>
							<h6 class="card-subtitle mb-2 text-muted">Haz clic en el repuesto que solicitarás</h6>
              <button type="button" class="btn btn-primary btn col-3" data-toggle="modal" data-target="#lentes">
                LENTES
              </button>
              <button type="button" class="btn btn-primary btn col-3" data-toggle="modal" data-target="#guantes">
                GUANTES
              </button>
              <button type="button" class="btn btn-primary btn col-3" data-toggle="modal" data-target="#cubrebocas">
                CUBRE BOCAS
              </button>
						</div>
					</div><!--Solicitar repuestos-->

					<!---Enviar sugerencias--->
				   <div class="card col-12">
					   <div class="card-body">
						   <h5 class="card-title">Sugerencias</h5>
						   <h6 class="card-subtitle mb-2 text-muted">Envianos tus sugerencias</h6>
						   <form method="post" action="MENUCONTROLLER/Sugerencias" >
							   <input type="text" class="col-6  input-tex  use-keyboard-input" maxlength="255" name="sugerencia" id="sugerencia">
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
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Aceptar</button>
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
            <button type="button" class="btn btn-primary">Aceptar</button>
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
            <button type="button" class="btn btn-primary">Aceptar</button>
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
            <button type="button" class="btn btn-primary">Aceptar</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Modal LENTES-->
    <div class="modal fade" id="lentes" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Lentes</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Deseas solicitar lentes?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Aceptar</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Modal GUANTES-->
    <div class="modal fade" id="guantes" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">GUANTES</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Deseas solicitar guantes?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Aceptar</button>
          </div>
        </div>
      </div>
    </div>


        <!-- Modal CUBRE BOCAS-->
        <div class="modal fade" id="cubrebocas" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">CUBRE BOCAS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Deseas solicitar Cubre bocas?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Aceptar</button>
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





</body>
</html>
