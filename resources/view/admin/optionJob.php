<?php include_once "../../../init.php"?>

<!doctype html>

<html lang="en">
  <head>
    <title>Crear Puesto</title>
    
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
				<h1>Crear Puesto</h1>
				<p>De de alta un nuevo puesto para los usuarios</p>		
			</div>
	</div>
	
	<div class="row">	
		<div class="col-sm-12 col-md-6 col-lg-6">
		
		<h3>Crea un puesto nuevo</h3><hr />
		
		<form method="post" action="../../php/job.php" method="POST">
				
		<div class="form-group">				
				<input type="text" class="form-control" name="puesto" placeholder="Nombre del puesto" required>			
		  </div>

		  <button type="submit" class="btn btn-success btn-block">Crear nuevo puesto</button>
		</form>		
		</div>		
		<div class="col-sm-12 col-md-6 col-lg-6">
		<div class="container-fluid" >
        <div class="row">

          <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Puesto</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
            

			  <?php 
					include_once '../../php/conn.php';
						$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
						// Check connection
						if (!$conn) {
							die("Connection failed: " . mysqli_connect_error());
						}
					else{
						$query = "SELECT puesto FROM puestos";
						if( $result = $conn->query($query)){
							$i=0;
							while( $row = $result->fetch_assoc())
							{
								$puesto = $row["puesto"];
								echo "<tr>";
								echo '<td>'. $i. '</td>';
								echo '<td>' ;
								echo $puesto;
								echo '</td>';
								echo '<td>
								<button type="button" class="btn btn-danger">Baja</button>
									  </td>';
								echo "</tr>";

								$i++;
							}
						}
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