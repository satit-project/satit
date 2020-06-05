<?php include_once("conn.php");?>
<!doctype html>
<html lang="en">
  <head>
    <title>Create account on database</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
<body>

<div class="container">

	<?php

	include 'conn.php';

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	// Query to check if the email already exist
	//$nEmpleado = "SELECT * FROM login_satit WHERE numero_empleado = '$_POST[numero_empleado]' ";
	
	// *****-> proto
	$nEmpleado = "SELECT * FROM empleados WHERE numero_empleado = '$_POST[numero_empleado]' ";
	
	// Variable $result hold the connection data and the query
	$result = $conn-> query($nEmpleado);

	// Variable $count hold the result of the query
	$count = mysqli_num_rows($result);

	// If count == 1 that means the email is already on the database
	if ($count == 1) {
		echo "<div class='alert alert-warning mt-4' role='alert'>
						<p>Este numero de empleado ya existe en la base de datos.</p>
						<p><a href='../../index.html'>Por favor inicie sesion aqui.</a></p>
					</div>";
	} else {	
	
		/*
		If the email don't exist, the data from the form is sended to the
		database and the account is created
		*/
		$name = $_POST['name'];
		$apellidos = $_POST['apellidos'];
		$numero_empleado = $_POST['numero_empleado'];
		$puesto = $_POST['puesto'];

		//traer preguntas y respuestas de suguridad
		$Seg_pregunta_1 = $_POST['Seg_pregunta_1'];
		$Seg_pregunta_2 = $_POST['Seg_pregunta_2'];
		$R_pregunta_1 = $_POST['R_pregunta_1'];
		$R_pregunta_2 = $_POST['R_pregunta_2'];

		    // check if the passwords match
			if($_POST['password']==$_POST['password_verifica']){	
				// **********
				$pass = $_POST['password'];
			
				// The password_hash() function convert the password in a hash before send it to the database
				$passHash = password_hash($pass, PASSWORD_DEFAULT);
				
				// Query to send Name, Email and Password hash to the database
				//$query = "INSERT INTO login_satit (nombre, numero_empleado, correo_electronico, password) VALUES ('$name', '$numero_empleado','$correo', '$passHash')";
				
				// ********-->> prototype emplados table
				$query = "INSERT INTO empleados (nombre, apellidos, numero_empleado, password, id_puesto) VALUES ('$name', '$apellidos', '$numero_empleado', '$passHash','$puesto')";
				
				if (mysqli_query($conn, $query)) {
					//guarda las preguntas de seguridad
					// Query sent to database
					$result = mysqli_query($conn, "SELECT id FROM empleados WHERE numero_empleado = '$numero_empleado'");
					// Variable $row hold the result of the query
					$row = mysqli_fetch_assoc($result);
					$id=$row['id'];
					//$R1_seguridad_Hash = password_hash($R_pregunta_1, PASSWORD_DEFAULT);
					//$R2_seguridad_Hash = password_hash($R_pregunta_2, PASSWORD_DEFAULT);
					//id	pregunta_1	respuesta_1	pregunta_2	respuesta_2	id_empleado		
					$queryPreguntas ="INSERT INTO preguntas_seguridad (pregunta_1, respuesta_1, pregunta_2, respuesta_2, id_empleado) VALUES ('$Seg_pregunta_1', '$R_pregunta_1', '$Seg_pregunta_2', '$R_pregunta_2','$id')";
					
					if (mysqli_query($conn, $queryPreguntas)) {
						echo "<div class='alert alert-success mt-4' role='alert'><h3>Cuenta creada.</h3>
							<a class='btn btn-outline-primary' href='../../index.html' role='button'>Login</a></div>";
					}
					//---------------------------------------------

					

				}else {
					echo "Error: " . $query . "<br>" . mysqli_error($conn);
				}
			}else{
				echo "<script>
						alert('Las contraseñas ingresadas no son iguales.');
						window.location= '../../crear_cuenta.php'
					</script>";
			}
	}	
	mysqli_close($conn);
	?>
</div>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>