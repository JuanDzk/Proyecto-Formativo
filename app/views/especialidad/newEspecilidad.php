<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/especialidad/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/especialidad/create" method="post">
            <div class="form-group">
                <label for="txtId">ID de la Especialidad:</label>
                <input type="text" readonly value="<?php echo $especialidad->id ?? '' ?>" name="txtId" id="txtId" class="form-control">
            </div>
            <div class="form-group">
                <label for="txtCodigo">Nombre de la Especialidad:</label>
                <input type="text" name="txtNombre" id="txtNombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="txtNombre">Descripcion de la Especialidad:</label>
                <input type="text" name="txtDescripcion" id="txtDescripcion" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>
