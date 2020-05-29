<!doctype html>
<html lang="en">
	<head>		
    	<title>Password Recovery</title>
    	<!-- Required meta tags -->
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    	<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
<body>
<div class="container">
	<div class="row">
		
		<div class="col-sm-12 col-md-6 col-lg-6">
			<h3>Recuperar Password</h3><hr />
			
			<?php
			include 'conn.php';
			
			$numero_empleado = $_POST['numero_empleado'];				
			$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
				
			$sql = "SELECT id, numero_empleado FROM empleados WHERE numero_empleado='$numero_empleado'";				
			$result = mysqli_query($conn, $sql);
			
				
			if (mysqli_num_rows($result) > 0) {
				$row = mysqli_fetch_assoc($result);
				$id=$row['id'];
				//trae las preguntas de seguridad
				//id pregunta_1,respuesta_1,pregunta_2,respuesta_2,id_empleado

					// Query sent to database
					$result = mysqli_query($conn, "SELECT pregunta_1,respuesta_1,pregunta_2,respuesta_2 FROM preguntas_seguridad WHERE id_empleado = '$id'");
					// Variable $row hold the result of the query
					$row = mysqli_fetch_assoc($result);
					$p1=$row['pregunta_1'];
					$p2=$row['pregunta_2'];

				//echo "<p>Numero de empleado encontrado: ".$_POST['numero_empleado']."</p><p>Porfavor Responda las Preguntas de Seguridad!</p>";
				
			} else {
				echo "Lo sentimos, su numero de empleado no se encontro.";
			}
			?>
			<!------------------------------------------------------------------------------>

			<h5>Preguntas de seguridad</h5>
			
			<form action="cambiar-password.php" method="post">
				<div class="form-group">				
						<input type="text" class="form-control" name="numero_empleado" placeholder="Ingrese su numero de empleado nuevamente" required value="">			
				</div>
				<a><?php if (mysqli_num_rows($result) > 0) {echo $p1;} ?></a>
				<div class="form-group">				
						<input type="text" class="form-control" name="respuesta_1" placeholder="Respuesta" required >			
				</div>
				<a><?php if (mysqli_num_rows($result) > 0) {echo $p2;} ?></a>
				<div class="form-group">				
						<input type="text" class="form-control" name="respuesta_2" placeholder="Respuesta" required>			
				</div>
				<button type="submit" class="btn btn-success btn-block">Verificar respuestas</button>
			</form>
			<!------------------------------------------------------------------------------>
			

		</div>
		<div class="col-sm-12 col-md-6 col-lg-6">
			<h3>Ayuda</h3><hr />
			<p>1. - Ingresa nuevamente tu numero de empleado en el primer campo.</p>
			<p>2. - Ingresa la respuesta de la primera pregunta en el segundo campo.</p>
			<p>3. - Ingresa la respuesta de la segunda pregunta en el tercer campo.</p>
			<p>4. - Preciona el boton para validar.</p>
		</div>
	</div>
</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</body>
</html>