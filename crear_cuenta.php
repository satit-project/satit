<!doctype html>

<html lang="en">
  <head>
    <title>Crear cuenta</title>
    
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<link rel="stylesheet" href="css/custom.css">
  </head>
  <body>
  
  <div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Crear Cuenta</h1>
				<p>Creador de cuentas.</p>		
			</div>
	</div>
	
	<div class="row">	
		<div class="col-sm-12 col-md-6 col-lg-6">
		
		<h3>Crear una Cuenta</h3><hr />
		
		<form method="post" action="resources/php/create-account.php" method="POST">
			<div class="form-group">				
				<input type="text" class="form-control" name="name" placeholder="Ingrese su Nombre" required>			
		  </div>
			<div class="form-group">				
				<input type="text" class="form-control" name="apellidos" placeholder="Ingrese sus Apellidos" required>			
		  </div>
		  
		  <div class="form-group">				
				<input type="text" class="form-control" name="numero_empleado" placeholder="Ingrese Numero de Empleado" required>
			</div>


			  
			  <div class="input-group mb-3">
				<div class="input-group-prepend">
					<label class="input-group-text" for="inputGroupSelect01">Options</label>
				</div>
				<select class="custom-select" id="inputGroupSelect01">
					<option selected>Choose...</option>
					<?php 
									include 'resources/php/conn.php';
										$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
										// Check connection
										if (!$conn) {
											die("Connection failed: " . mysqli_connect_error());
										}
									else{
										$query = "SELECT * FROM puestos";
										if( $result = $conn->query($query)){
										
											while( $row = $result->fetch_assoc())
											{
												$puesto = $row["puesto"];
												
												echo '<option value=".$row["id"]">';
												echo  $puesto;
												echo '</option>';
											}
										}
									}
								
				 ?>
	
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
</div>

			
			<div class="form-group">				
				<input type="password" class="form-control" name="password" placeholder="Ingrese Contraseña" required>
			</div>

			<div class="form-group">				
				<input type="password" class="form-control" name="password_verifica" placeholder="Ingrese contraseña Nuevamente" required>
			</div>
		  
		  <button type="submit" class="btn btn-success btn-block">Crear cuenta</button>
		</form>		
		</div>		
		<div class="col-sm-12 col-md-6 col-lg-6">
			<h3>Login</h3><hr />
			<p>Ya tienes una cuenta? <a href="index.html" title="Login Here">Inicia sesion aqui!</a></p>
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