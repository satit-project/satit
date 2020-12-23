<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nomina</title>
  </head>
  <body>
    <div class="card col-12 ">
		<div class="card-body">
			<h5 class="card-title">Solicitar Material</h5>
			<h6 class="card-subtitle mb-2 text-muted ">Haz clic para solicitar tu material</h6>
              <button type="button button-display " 
                     class="btn btn-primary btn col-3 materialButton" 
               data-toggle="modal" 
               data-target="#material"  
               id="materialButton"
               display ="none"
              >
              Material</button>
    <?php  
        $data = $this->getData();
        $this->printData();
        print_r($data);
    ?>
			</div>
      
    </div>
        
  <!-- Modal Material-->
    <div class="modal fade" id="material" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Solicitar Material</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Equipo basico de trabajo
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a type="button" class="btn btn-primary" href="material/materialRequest">Aceptar</a>
          </div>
        </div>
      </div>
    </div>
  <!-- fin modal material-->
  <!-- Javascript-->
  <script src="public/js/material.js"></script>

  </body>
  </body>
</html>
