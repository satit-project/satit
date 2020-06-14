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
  <?php require_once 'views/header.php'; ?>

  <div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Actualizar Cuenta</h1>
				<p>Actualización de cuentas.</p>		
			</div>
	</div>
	
	<div class="row">	
		<div class="col-sm-12 col-md-6 col-lg-6">
		<? echo $this->message;?>
		<h3>Actualizar una Cuenta</h3>

			<form action= "<?php echo constant('URL')?>account/updateEmployee" method="POST">
				<div class="form-group">				
					<input type="text" class="form-control" name="name" placeholder="Ingrese su Nombre" value="<?php echo $this->employee->get('name'); ?>"required>			
				</div>
				<div class="form-group">				
					<input type="text" class="form-control" name="sourname" placeholder="Ingrese sus Apellidos" value="<?php echo $this->employee->get('sourname'); ?>"required>			
				</div>
				<div class="form-group">				
					<input type="text" class="form-control" name="userID" placeholder="Ingrese Numero de Empleado" value="<?php echo $this->employee->get('userID'); ?>" disabled required>
				</div>


				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<label class="input-group-text" for="job">Puesto</label>
					</div>
					<select class="custom-select" id="job" name="job">
						
						<option selected>Selecciona...</option>
						<?php 		
							include_once('models/job');	
							foreach( $this->jobs as $row)
									{
										$job = $row;
										echo '<option value='.$job->jobID.'>';
										echo  $job->job;
										echo '</option>';
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
					<select name="question1" require>
						<option value="0">Seleccione una pregunta de seguridad 1</option>
						<option value="Cual era el nombre de tu primera mascota?">Cual era el nombre de tu primera mascota?</option> 
						<option value="Cual es el nombre de la cuidad en que naciste?">Cual es el nombre de la cuidad en que naciste?</option> 
						<option value="Cual era tu apodo de la infancia?">Cual era tu apodo de la infancia?</option>
						<option value="Cual es el nombre de la cuidad en la que se conocieron tus padres?">Cual es el nombre de la cuidad en la que se conocieron tus padres?</option> 
						<option value="Cual es el nombre de tu primer auto?">Cual es el nombre de tu primer auto?</option> 
						<option value="Como de llama la primera escuela a la que asististe?">Como de llama la primera escuela a la que asististe?</option> 
					</select>
					<div class="form-group">				
						<input type="text" class="form-control" name="answer1" placeholder="Respuesta pregunta 1" required>			
					</div>
				</div>
				<div>
					<select name="question2">
						<option value="0">Seleccione una pregunta de seguridad 2</option>
						<option value="Cual era el nombre de tu primera mascota?">Cual era el nombre de tu primera mascota?</option> 
						<option value="Cual es el nombre de la cuidad en que naciste?">Cual es el nombre de la cuidad en que naciste?</option> 
						<option value="Cual era tu apodo de la infancia?">Cual era tu apodo de la infancia?</option>
						<option value="Cual es el nombre de la cuidad en la que se conocieron tus padres?">Cual es el nombre de la cuidad en la que se conocieron tus padres?</option> 
						<option value="Cual es el nombre de tu primer auto?">Cual es el nombre de tu primer auto?</option> 
						<option value="Como de llama la primera escuela a la que asististe?">Como de llama la primera escuela a la que asististe?</option> 
					</select>
					<div class="form-group">				
						<input type="text" class="form-control" name="answer2" placeholder="Respuesta pregunta 2" required>			
					</div>
				</div>
				
			
				<button type="submit" class="btn btn-success btn-block">Actualiza cuenta</button>
			</form>
		</div>

	
		<div class="col-sm-12 col-md-6 col-lg-6">
			<div class="container-fluid" >
        		<div class="row">

         		    <table class="table">
					 
           			   <thead class="thead-dark">
							<tr>
								<th scope="col">#</th>
								<th scope="col">ID</th>
								<th scope="col">Nombre</th>
								<th scope="col">Apellidos</th>
								<th scope="col">Puesto</th>
								<th scope="col">Actualizar</th>
								<th scope="col">Baja</th>
							</tr>
              			</thead>
						  
						<tbody>
							

							<?php 
								$i=0;
								foreach ($this->employees as $row) {
									$employee = $row;
									echo "<tr>";
									echo '<td>'.$i.'</td>';
									echo '<td>'.$employee->get('userID').  '</td>';
									echo '<td>'.$employee->get('name').'</td>';
									echo '<td>'.$employee->get('sourname').'</td>';
									echo '<td>'.$employee->get('job').'</td>';
									echo '<td><a class="btn btn-primary" href="'.constant('URL').'account/viewEmployee/'.$employee->get('userID').'"</a>Actualizar</td>';
									echo '<td><a class="btn btn-danger" href="'.constant('URL').'account/delete"</a>Baja</td>';
									$i++;
								}	
							?>
	
            		  </tbody>
            		</table>
        		</div>
    		</div>
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