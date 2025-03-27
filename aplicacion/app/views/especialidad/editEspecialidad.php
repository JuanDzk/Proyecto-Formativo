<div class="data-container">
    <div class="form-group-button-volver">
        <a href="/especialidad/view"><button>←</button></a>
    </div>
    <form action="/especialidad/update" method="post">
        <div class="form-group">
            <label for="">ID de la Especialidad:</label>
            <input type="text" readonly value="<?php echo $especialidad->idEspecialidad ?>" name="id" id="id" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Nombre de la Especialidad:</label>
            <input type="text" value="<?php echo $especialidad->nombre ?>" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Descripción:</label>
            <input type="text" value="<?php echo $especialidad->descripcion ?>" name="descripcion" id="descripcion" class="form-control">
        </div>
        <div class="form-group-button">
            <button type="submit">Editar</button>
        </div>
    </form>
</div>