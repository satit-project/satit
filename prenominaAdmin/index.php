<!DOCTYPE html>  
<html>  
    <head>  
        <title>Nomina Admin</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    </head>  
    <body>  
        <div>
            <?php require_once('sidenav.php'); ?>
        </div>
        <?php
            include_once 'DBConnection.php';
            if(!empty($_GET['status']))
            {
                switch($_GET['status'])
                {
                    case 'succ':
                        $statusType = 'alert-success';
                        $statusMsg = "-                       -                         -                -      -                -          -     -                -             - Se han importado los datos satisfactoriamente";
                    break;
                    case 'err':
                        $statusType = 'alert-danger';
                        $statusMsg = '-                       -                         -                -      -                -          -     -                -             - Ocurrio un error';
                    break;
                    default:
                        $statusType = '';
                        $statusMsg = '';
                }
            }
        ?>

        <?php
            if(!empty($statusMsg))
            {?>
                <div class="col-xs-12">
                    <div class="alert <?php echo $statusType; ?>"><?php echo $statusMsg; ?></div>
                </div>
            <?php }
        ?>

        <div style="text-align: center;"  class="container" id="main">
            <h1 style="font-size: 30px;">Prenomina</h1>
            <div class="col-md-12 head">
                <div class="float-left">
                    <a href="javascript:void(0);" style="font-size: 12px;" class="btn btn-success" onclick="formToggle('importFrm');"><i class="plus"></i>Importar datos</a><br><br>
                </div>
                <form class="form-inline float-right" method="post">
                    <div class="form-group row">
                        <div class="col-xs-4">
                            <input class="form-control" style="font-size: 12px;" id="id" name="buscar" type="text" placeholder="Busqueda por ID">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-4">
                            <button type="submit" name="busca" style="font-size: 14px;" class="btn btn-primary"><span class="glyphicon glyphicon-search"> </span> Buscar </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-12" id="importFrm" style="display: none;">
                <form action="importDB.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="file"/>
                    <input type="submit" style="font-size: 12px;" class="btn btn-primary" name="importSubmit" value="IMPORT">
                </form>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">#ID Registro</th>
                            <th class="text-center">Horas</th>
                            <th class="text-center">Pago</th>
                            <th class="text-center">Fecha</th>
                            <th class="text-center">ID empleado</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(isset($_POST["busca"]))
                    {
                        $str = $_POST["buscar"];
                        if($str == '')
                        {
                            $result = $db->query("SELECT * FROM nomina");
                        }
                        else
                        {
                            $result = $db->query("SELECT * FROM nomina WHERE empleado_id = '$str'");
                        }
                    }
                    else
                    {
                        $result = $db->query("SELECT * FROM nomina");
                    }
                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                    ?>
                        <tr>
                            <td class="text-center"><?php echo $row['id']; ?></td>
                            <td class="text-center"><?php echo $row['horas'];?></td>
                            <td class="text-center"><?php echo $row['pago'];?></td>
                            <td class="text-center"><?php echo $row['fecha'];?></td>
                            <td class="text-center"><?php echo $row['empleado_id'];?></td>
                        </tr>
                    <?php } }else{ ?>
                        <tr><td colspan="5">No member(s) found...</td></tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <script>
            function formToggle(ID)
            {
                var element = document.getElementById(ID);
                if(element.style.display === "none")
                {
                    element.style.display = "block";
                }
                else
                {
                    element.style.display = "none";
                }
            }
        </script>
    </body>  
</html> 