<div>
    <?php require_once('Views/Layouts/sidenav.php'); ?>
</div>
<div style="text-align: center;" class="container" id="main">
    <h1 style="font-size: 30px;">Lista de Sugerencias</h1>
    <form class="form-inline" action="?controller=sugerencias&action=search" method="post">
        <div class="form-group row">
            <div class="col-xs-4">
                <input style="font-size:14px;" class="form-control" id="id" name="id" type="text" placeholder="Busqueda por ID">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-4">
                <button type="submit" style="font-size: 12px;" class="btn btn-primary"><span class="glyphicon glyphicon-search"> </span> Buscar </button>
            </div>
        </div>
    </form>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Fecha de Sugerencia</th>
                    <th>Numero de Empleado</th>
                    <th>Descripcion de Sugerencia</th>
                </tr>
                <tbody>
                    <?php if(is_array($listaSugerencias)){ 
                        foreach($listaSugerencias as $sugerencias){?>
                    <tr>
                        <td> <?php echo $sugerencias->getId(); ?></td>
                        <td><?php echo $sugerencias->getFecha(); ?></td>
                        <td><?php echo $sugerencias->getDescripcion(); ?></td>
                        <td><?php echo $sugerencias->getEmpleadoId(); ?></td>
                    </tr>
                    <?php }} ?>
                </tbody>
            </thead>
        </table>
    </div>
</div>