<!doctype html>
<html lang="en">
	<head>		
    	<title>Password a Default</title>
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

					//echo "<h4>Pregunta 1: </h4>".$p1;
					/*<?php?>*/
					$hashR1=$row['respuesta_1'];
                    $hashR2=$row['respuesta_2'];
                    if($_POST['respuesta_1']==$hashR1&&$_POST['respuesta_2']==$hashR2){
                        echo "<p>Las Respuestas son correctas.</p>";
                        $pass = "12345";
			
                        // The password_hash() function convert the password in a hash before send it to the database
                        $passHash = password_hash($pass, PASSWORD_DEFAULT);
                        
                        // Query
                        $num=$_POST['numero_empleado'];
                        $query = "UPDATE empleados SET password='$passHash' WHERE numero_empleado='$num'";
                        if (mysqli_query($conn, $query)) {

							echo "<p>Para numero de empleado: ".$_POST['numero_empleado']."<p>Su nueva clase generica es:</p><h4>12345</h4><br>

							<div class='alert alert-success alert-dismissible mt-4' role='alert'>
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span></button>
			
							<p>Presione para iniciar sesion.</p>
							<p><a class='alert-link' href=../../index.html>Ir a Login</a></p></div>";
                        }
				
                    }
					/*
					if (password_verify($_POST['respuesta_1'], $hashR1)) {
						echo "<p>Respuesta 1 correcta.</p>";
						
					} else {
						echo "<p>Error Respuesta 1</p>".$_POST['respuesta_1'].$id;
					}
					if (password_verify($_POST['respuesta_2'], $hashR2)) {
						echo "<p>Respuesta 2 correcta.</p>";
					} else {
						echo "<p>Error Respuesta 2</p>".$_POST['respuesta_2'];
					}
                    */

				
				/*
				echo "<div class='alert alert-success alert-dismissible mt-4' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span></button>

				<p>Correo enviado! Por favor revisa tu correo Electronico.</p>
				<p><a class='alert-link' href=../../index.html>Login</a></p></div>";
				*/
			} else {
				echo "<div class='alert alert-success alert-dismissible mt-4' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span></button>

                <p>Lo sentimos, su numero de empleado no coincide.</p>
                <p><a href='javascript:history.back()'> Volver a Pagina Anteriror</a></p></div>";
            }
            
			?>
            <!------------------------------------------------------------------------------>
            

		</div>
		<div class="col-sm-12 col-md-6 col-lg-6">
			<h3>Indicaciones</h3><hr />
            <p>1. - Inicie sesion con su nueva clave generica.</p>
            <p>2. - Una vez iniciada su sesion la puede cambiar por una que sea facil de recordar.</p>
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