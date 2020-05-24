<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <title>Users</title>
</head>
<body>

    <div class="container-fluid" width="800px">
        <div class="row">

          <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Numero de empleado</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellidos</th>
                  <th scope="col">Puesto</th>
                </tr>
              </thead>
              <tbody>
                  <?php 
                    include '../../php/conn.php';
                      $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
                      // Check connection
                      if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                      }
                    else{
                      $query = "SELECT * FROM empleados";
                      if( $result = $conn->query($query)){
                        $i =0;
                        while( $row = $result->fetch_assoc())
                        {
                          $i++;
                          $nombre = $row["nombre"];
                                          $apellidos = $row["apellidos"];
                                          $numero_empleado = $row["numero_empleado"];
                                          echo "<tr>";
                                          echo '<th scope="row">'.$i.'</th>';
                                          echo '<td>'.$numero_empleado.'</td>';
                                          echo '<td>'.$nombre.'</td>';
                                          echo '<td>',$apellidos.'</td>';
                                          echo "</tr>";
                        }   
                      }
                    }
              ?>
              </tbody>
            </table>

        </div>
    </div>
</body>
</html>