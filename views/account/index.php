<!doctype html>

<html lang="en">
  <head>
    <title>Cuentas</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  </head>
  <body>
  <?php  require_once ('views/header.php'); ?>
  <?php echo $this->message;?>
  <div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Crear Cuenta</h1>
				<p>Creador de cuentas</p>
			</div>
	</div>

	<div class="row">
		<div class="col-sm-12 col-md-6 col-lg-6">

		<h3>Crear una Cuenta</h3>

		<form action= "<?php echo constant('URL');?>account/createNewAccount" method="POST">
			<div class="form-group">
				<input type="text" class="form-control" name="name" placeholder="Ingrese su Nombre" required>
		  </div>
			<div class="form-group">
				<input type="text" class="form-control" name="sourname" placeholder="Ingrese sus Apellidos" required>
		  </div>

		  <div class="form-group">
				<input type="text" class="form-control" name="employeeID" placeholder="Ingrese Numero de Empleado" required>
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
				<input type="password" class="form-control" name="password" placeholder="Ingrese contraseña" required>
			</div>

			<div class="form-group">
				<input type="password" class="form-control" name="password_verifica" placeholder="Ingrese contraseña Nuevamente" required>
			</div>
			<div>

				<h4>Preguntas de Seguridad</h4>
				<select class="custom-select" name="question_1">
					<option value="0">Seleccione una pregunta de seguridad 1</option>
					<option value="Cual era el nombre de tu primera mascota?">Cual era el nombre de tu primera mascota?</option>
					<option value="Cual es el nombre de la cuidad en que naciste?">Cual es el nombre de la cuidad en que naciste?</option>
					<option value="Cual era tu apodo de la infancia?">Cual era tu apodo de la infancia?</option>
					<option value="Cual es el nombre de la cuidad en la que se conocieron tus padres?">Cual es el nombre de la cuidad en la que se conocieron tus padres?</option>
					<option value="Cual es el nombre de tu primer auto?">Cual es el nombre de tu primer auto?</option>
					<option value="Como de llama la primera escuela a la que asististe?">Como de llama la primera escuela a la que asististe?</option>
				</select>
				<div class="form-group">
					<input type="text" class="form-control" name="answer_1" placeholder="Respuesta pregunta 1" required>
		  		</div>
			</div>
			<div>
				<select class="custom-select" name="question_2">
					<option value="0">Seleccione una pregunta de seguridad 2</option>
					<option value="Cual era el nombre de tu primera mascota?">Cual era el nombre de tu primera mascota?</option>
					<option value="Cual es el nombre de la cuidad en que naciste?">Cual es el nombre de la cuidad en que naciste?</option>
					<option value="Cual era tu apodo de la infancia?">Cual era tu apodo de la infancia?</option>
					<option value="Cual es el nombre de la cuidad en la que se conocieron tus padres?">Cual es el nombre de la cuidad en la que se conocieron tus padres?</option>
					<option value="Cual es el nombre de tu primer auto?">Cual es el nombre de tu primer auto?</option>
					<option value="Como de llama la primera escuela a la que asististe?">Como de llama la primera escuela a la que asististe?</option>
				</select>
				<div class="form-group">
					<input type="text" class="form-control" name="answer_2" placeholder="Respuesta pregunta 2" required>
		  		</div>
			</div>

				<button type="submit" class="btn btn-success btn-block">Crear cuenta</button>
			</form>
		</div>


		<div class="col-sm-12 col-md-6 col-lg-6">
			<div class="container-fluid" >
        		<div class="row">

       <table id="tbemployees" class="table">

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
								$i=1;
								foreach ($this->employees as $row) {
									$employee = $row;
									echo "<tr>";
									echo '<td>'.$i.'</td>';
									echo '<td>'.$employee->get('employeeID').  '</td>';
									echo '<td>'.$employee->get('name').'</td>';
									echo '<td>'.$employee->get('sourname').'</td>';
									echo '<td>'.$employee->get('job').'</td>';
									echo '<td><a class="btn btn-primary" href="'.constant('URL').'account/viewEmployee/'.$employee->get('employeeID').'"</a>Actualizar</td>';
									echo '<td><a class="btn btn-danger" href="'.constant('URL').'account/deleteEmployee"</a>Baja</td>';
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
	</body>
  <script>

  $(document).ready(function() {
      $('#tbemployees').DataTable();
  } );
  </script>
</html>
