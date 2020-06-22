
<!doctype html>

<html lang="en">
  <head>
    <title>Crear Puesto</title>
    
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
				<h1>Crear Curso</h1>
				
				<p>Da de alta un nuevo curso para los usuarios</p>		
			</div>
		</div>
	
	<div class="row">	
		<div class="col-sm-12 col-md-6 col-lg-6">
		<h3>Crea un curso nuevo</h3><hr/>
		<form method="post" action="<?php echo constant('URL'); ?>course/newCourse" method="POST">
				<!-- form --->
				<div class="form-group">				
						<input type="text" class="form-control" name="title" placeholder="Titulo del curso" required>			
				  </div>
				<div class="form-group">				
						<input type="text" class="form-control" name="description" placeholder="Descripcion curso" required>			
				  </div>
				<div class="form-group">				
						<input type="date" class="form-control" name="date" placeholder="Fecha del curso" required>			
				  </div>
				<div class="form-group">				
						<input type="text" class="form-control" name="hour" placeholder="Horario del curso. Ej: 8 - 10 AM" required>			
				  </div>
		
		
				  <button type="submit" class="btn btn-success btn-block" name="option" value="alta">Crear nuevo curso</button>
				</form>	<!-- form --->
		
		</div>		
		<div class="col-sm-12 col-md-6 col-lg-6">
		<div class="container-fluid" >
        <div class="row">

          <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Titulo</th>
                  <th scope="col">Descripcion</th>
                  <th scope="col">Fecha</th>
                  <th scope="col">Horario</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
            

			  <?php 

			  foreach ($this->courses as $row) {
			  	$course = $row;
			  	echo "<tr>";
				echo '<td>'.$course->id.  '</td>';
				echo '<td>'.$course->title.'</td>';
				echo '<td>'.$course->description.'</td>';
				echo '<td>'.$course->hour.'</td>';
				echo '<td>'.$course->date.'</td>';

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
 
	</body>




</html>