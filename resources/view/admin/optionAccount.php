<?include_once ("../factory.php")?>
<!doctype html>

<html lang="en">
  <head>
    <title>Crear cuenta</title>
    
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
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
		
		<form method="post" action="<?php echo ACCOUNTCONTROLLER?>" method="POST">
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
					<label class="input-group-text" for="puesto">Puesto</label>
				</div>
				<select class="custom-select" id="puesto" name="puesto">
					
					<option selected>Selecciona...</option>
					<?php 
									include '../php/conn.php';
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
												
												echo '<option value='.$row['id'].'>';
												echo  $puesto;
												echo '</option>';
											}
										}
									}
								
				 ?>
  				</select>
			</div>

			<div class="form-group">				
				<input type="password" class="form-control" name="password" placeholder="Ingrese Contraseña" required>
			</div>

			<div class="form-group">				
				<input type="password" class="form-control" name="password_verifica" placeholder="Ingrese contraseña Nuevamente" required>
			</div>
			<div>
				<h4>Preguntas de Seguridad</h4>
				<select name="Seg_pregunta_1">
					<option value="0">Seleccione una pregunta de seguridad 1</option>
					<option value="Cual era el nombre de tu primera mascota?">Cual era el nombre de tu primera mascota?</option> 
					<option value="Cual es el nombre de la cuidad en que naciste?">Cual es el nombre de la cuidad en que naciste?</option> 
					<option value="Cual era tu apodo de la infancia?">Cual era tu apodo de la infancia?</option>
					<option value="Cual es el nombre de la cuidad en la que se conocieron tus padres?">Cual es el nombre de la cuidad en la que se conocieron tus padres?</option> 
					<option value="Cual es el nombre de tu primer auto?">Cual es el nombre de tu primer auto?</option> 
					<option value="Como de llama la primera escuela a la que asististe?">Como de llama la primera escuela a la que asististe?</option> 
				</select>
				<div class="form-group">				
					<input type="text" class="form-control" name="R_pregunta_1" placeholder="Respuesta pregunta 1" required>			
		  		</div>
			</div>
			<div>
				<select name="Seg_pregunta_2">
					<option value="0">Seleccione una pregunta de seguridad 2</option>
					<option value="Cual era el nombre de tu primera mascota?">Cual era el nombre de tu primera mascota?</option> 
					<option value="Cual es el nombre de la cuidad en que naciste?">Cual es el nombre de la cuidad en que naciste?</option> 
					<option value="Cual era tu apodo de la infancia?">Cual era tu apodo de la infancia?</option>
					<option value="Cual es el nombre de la cuidad en la que se conocieron tus padres?">Cual es el nombre de la cuidad en la que se conocieron tus padres?</option> 
					<option value="Cual es el nombre de tu primer auto?">Cual es el nombre de tu primer auto?</option> 
					<option value="Como de llama la primera escuela a la que asististe?">Como de llama la primera escuela a la que asististe?</option> 
				</select>
				<div class="form-group">				
					<input type="text" class="form-control" name="R_pregunta_2" placeholder="Respuesta pregunta 2" required>			
		  		</div>
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