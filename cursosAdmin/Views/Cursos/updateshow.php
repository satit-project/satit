<div class="container">
    <h2>Actualizar curso</h2>
    <form action="?controller=cursos&&action=update" method="POST">
        <input type="hidden" name="id" value="<?php echo $cursos->getId() ?>">
        <div class="form-group">
            <label for="text">Nombre de Curso</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $cursos->getNombre()?>">
        </div>
        <div class="form-group">
            <label for="text">Descripcion del Curso</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control" value="<?php echo $cursos->getDescripcion()?>">
        </div>
        <div class="form-group">
            <label for="text">Horario</label>
            <input type="text" name="horario" id="horario" class="form-control" value="<?php echo $cursos->getHorario()?>">
        </div>
        <div class="form-group">
            <label for="text">Fecha</label>
            <input type="date" name="fecha" id="fecha" class="form-control" value="<?php echo $cursos->getFecha()?>">
        </div>
        <div class="check-box">
            
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>