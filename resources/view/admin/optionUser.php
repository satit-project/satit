<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <title>Users</title>
</head>
<body>

  <div class="container-fluid" >
        <div class="row">

          <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Numero de empleado</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellidos</th>
                  <th scope="col">Acciones</th>
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
                                          echo '<td>' .$apellidos.'</td>';
                                          echo '<td>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editar-modal">Ver</button>
                                                    <button type="button" class="btn btn-danger">Baja</button>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregar-modal">
                                                    agregar</button>
                                                </td>';
                                          echo "</tr>";
                        }   
                      }
                    }
              ?>
              </tbody>
            </table>
        </div>
    </div>
 
      <div id="agregar-modal"class="modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Deseas agregar?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Matematicas Avanzadas<br>
            Clave: 1105 <br>
            Horario: 10:00AM - 12:00PM<br>
            </p>          
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="agregar()">Agregar</button>
          </div>
        </div>
      </div>
    </div>

</body>
</html>


