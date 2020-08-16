<div class="container">
    <h2>Registro de curso</h2>
    <form action="?controller=cursos&&action=save" method="POST">
        <div class="form-group">
            <label for="text">Nombre de Curso</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="form-group">
            <label for="text">Descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion">
        </div>
        <div class="form-group">
            <label for="text">Horario</label>
            <input type="text" class="form-control" id="horario" name="horario">
        </div>
        <div class="form-group">
            <label for="text">Fecha</label>
            <input type="date" class="form-control" id="fecha" name="fecha">
        </div>
        <div class="check-box">
           
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>