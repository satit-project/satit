<!doctype html>
<html lang="en">
  <head>
    <title>Crear new nuevo puesto en la base de datos</title>
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
	
	
	
	// search for job in 
	$puesto = "SELECT * FROM puestos WHERE puesto = '$_POST[puesto]' ";
	
	// Variable $result hold the connection data and the query
	$result = $conn-> query($puesto);

	// Variable $count hold the result of the query
	$count = mysqli_num_rows($result);

	// If count == 1 that means the email is already on the database
	if ($count == 1) {
	echo "<div class='alert alert-warning mt-4' role='alert'>
					<p>Este puesto ya existe en la base de datos.</p>
					<a class='btn btn-outline-primary' href='../view/admin/createJob.php' role='button'>Regresar</a></div>
				</div>";
	} else {	
	
		/*
		If the email don't exist, the data from the form is sended to the
		database and the account is created
        */
        
		$puesto = $_POST['puesto'];

	
			// insert new job into the database
			$query = "INSERT INTO puestos (puesto) VALUES ('$puesto')";

			if (mysqli_query($conn, $query)) {
				echo "<div class='alert alert-success mt-4' role='alert'><h3>Puesto creado.</h3>
				<a class='btn btn-outline-primary' href='../view/admin/createJob.php' role='button'>Regresar</a></div>";		
			}else {
				echo "Error: " . $query . "<br>" . mysqli_error($conn);
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