<?php
session_start();
include (NOMINACONTROLLER);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

	<link href="../css/principal.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="../css/keyboard.css">
	<script src="../js/keyboard.js"></script>
</head>

    <title>Principal</title>
</head>
<body>
    <!--verifica que realmente tengas sesion iniciada-->
		<?php
		if (isset($_SESSION['loggedin'])) {  
		}
		else {
			echo "<div class='alert alert-danger mt-4' role='alert'>
			<a class='titulo-sin-acceso'>Es necesario iniciar sesion en la pagina de Satit para acceder a esta pagina.</a>
			<p><a href='../../index.html' class='boton-para-login'>Iniciar sesion aqui!!</a></p></div>";
			exit;
		}
		// checking the time now when check-login.php page starts
		$now = time();           
		if ($now > $_SESSION['expire']) {
			session_destroy();
			echo "<div class='alert alert-danger mt-4' role='alert'>
			<a class='titulo-sin-acceso'>Su sesion a expirado!!</a>
			<p><a href='../../index.html'class='boton-para-login'>Iniciar sesion aqui!!</a></p></div>";
			exit;
			}
		?>
		<!------------------------------------------------------------------>
    

        <!---principal container--->
        <div class="container-fluid row">

		 <!---left container--->
           <div class="col-md-6">
			    <!----logo---->
					<div class="logo-container">
					</div>

					<!---user info---->
					<div class="card col-12">
						<div class="card-body">
							<h5  id="user-name" class="card-title"><?php  echo$_SESSION['name']." ".$_SESSION['apellidos']?></h5>
							<h6 id="user-code" class="card-subtitle mb-2 text-muted">
							    <?php  echo$_SESSION['numero_empleado']?>
							</h>
							<h6 id="user-job" class="card-subtitle mb-2 text-muted">
							    <?php  echo$_SESSION['puesto']?>
							</h6>
						</div>
					</div>


					<!---nomina---->
					<div class="card col-12 card-nborder">
						<div class="card-body">
							<h5 class="card-title">Nomina</h5>
							<h6 class="card-subtitle mb-2 text-muted">Actual</h6>
							<div class="user-nomina col-12">
							<p class="card-text">$500.00</p>	
							</div>
						</div>
					</div>


					<div class="card col-12 card-nborder">
						<div class="card-body">
							<h5 class="card-title">Prenomina</h5>
							<h6 class="card-subtitle mb-2 text-muted">Proxima</h6>
							<div class="user-nomina col-12">
							<p class="card-text">$500.00</p>	
							</div>
						</div>
					</div>

					<div class="card col-12 card-nborder">
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
							<button class="btn btn-success col-3">Solicitar</button>
						</div>
					</div><!---Solicitar carta--->


 					<!---Solicitar atencion--->
					<div class="card col-12">
						<div class="card-body">
							<h5 class="card-title">Solicitar atencion</h5>
							<h6 class="card-subtitle mb-2 text-muted">Haz clic departamento donde te atenderemos</h6>
							<button class="btn btn-success col-3" data-toggle="tooltip" data-placement="top" 
									title="Atencion en Recursos Humanos">Recusos Hum.</button>
							<button class="btn btn-success col-3"
									data-toggle="tooltip" data-placement="top" 
									title="Atencion en Capacitación y Desarrollo">Cap. y Desar.</button>
							<button class="btn btn-success col-3"
									data-toggle="tooltip" data-placement="top" 
									title="Atencion en Finanzas">Finanzas</button>
						</div>

					</div><!---Solicitar atencion--->

 					<!---Solicitar repuestos--->
					<div class="card col-12">
						<div class="card-body">
							<h5 class="card-title">Solicitar repuestos</h5>
							<h6 class="card-subtitle mb-2 text-muted">Haz clic en el repuesto que solicitarás</h6>
							<button class="btn btn-success col-3">Lentes</button>
							<button class="btn btn-success col-3">Guantes</button>
							<button class="btn btn-success col-3">Cubre bocas</button>
						</div>
					</div><!---Solicitar repuestos--->

					<!---Enviar sugerencias--->
				   <div class="card col-12">
					   <div class="card-body">
						   <h5 class="card-title">Sugerencias</h5>
						   <h6 class="card-subtitle mb-2 text-muted">Envianos tus sugerencias</h6>
						   <form>
							   <input type="text" class="col-6  input-tex  use-keyboard-input" maxlength="255">
							   <input type="submit" class="btn btn-success col-3" value="Enviar" >
						   </form>
	   
					   </div>
				   </div><!---Enviar sugerencias--->


 					<!---Inscribirme al acurso--->
					<div class="card col-12">
						<div class="card-body">
							<h5 class="card-title">Curso</h5>
							<h6 class="card-subtitle mb-2 text-muted">Haz clic para inscribirte</h6>
							<button class="btn btn-success col-3">Inscribirme</button>
		
						</div>
					</div><!---Inscribirme al acurso--->


					

				</div>
			</div><!---right container--->
		</div><!---principal container--->


		<script>
						$(function () {
			$('[data-toggle="tooltip"]').tooltip()
			})
		</script>
		<button type="button" class="btn btn-secondary main-button col-2" onclick="location.href='../php/logout.php'">Salir</button>
		<button type="button" class="btn btn-secondary main-button col-2" onclick="location.href='../php/page-change-password.php'">Cambiar Contrase&ntilde;a</button>


</body>
</html>