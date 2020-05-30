<?php
session_start();
?>

<!doctype html>
<html lang="en">
	<head>
		<title>Check Login and create session</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
		
			<?php
			// Connection info. file
			include 'conn.php';	
			
			// Connection variables
			$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			
			// data sent from form index.html 
			$numero_empleado = $_POST['numero_empleado']; 
			$password = $_POST['password'];
			
			// Query sent to database
			//$result = mysqli_query($conn, "SELECT  * FROM empleados INNER JOIN puestos ON empleados.id_puesto  = puestos.id");
			//consulta la tabla de para obtener el password guardado
			$result = mysqli_query($conn, "SELECT  * FROM empleados where numero_empleado='$numero_empleado'");
			// Variable $row hold the result of the query
			$row = mysqli_fetch_assoc($result);
			
			// Variable $hash hold the password hash on database
			$hash = $row['password'];
			$id= $row['id'];
			$nombre= $row['nombre'];
			$apellidos = $row['apellidos'];
			$numero_em = $row['numero_empleado'];
			$id_puesto=$row['id_puesto'];
			
			/* 
			password_Verify() function verify if the password entered by the user
			match the password hash on the database. If everything is OK the session
			is created for one minute. Change 1 on $_SESSION[start] to 5 for a 5 minutes session.
			*/
			if (password_verify($password, $hash)) {	
				//consultar nombre del puestos
				$result = mysqli_query($conn, "SELECT puesto FROM puestos where id='$id_puesto'");
				
				if(mysqli_num_rows($result) > 0){
					$row = mysqli_fetch_assoc($result);
					$nombre_puesto=$row['puesto'];
				
					$_SESSION['loggedin'] = true;
					$_SESSION['name'] = $nombre;
					$_SESSION['apellidos'] = $apellidos;
					$_SESSION['numero_empleado'] = $numero_em;
					$_SESSION['puesto'] = $nombre_puesto;
					$_SESSION['start'] = time();
					$_SESSION['expire'] = $_SESSION['start'] + (15 * 60) ;// despues de 15 min la sesion de cierra sola					
					
					//redirecciona al menu principal
					header("Status: 301 Moved Permanently");
					header("Location: ../view/principal.php");
					exit;
				}else{
					echo "<div class='alert alert-danger mt-4' role='alert'>error al consultar tabla puesto
					<p><a href='../../index.html'><strong>Falla!</strong></a></p></div>";
				}
				
			} else {
				echo "<div class='alert alert-danger mt-4' role='alert'>Numero de empleado o Contrasena incorrectos!!
				<p><a href='../../index.html'><strong>Porfavor intente de nuevamente!</strong></a></p></div>";			
			}	
			?>
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	</body>
</html>