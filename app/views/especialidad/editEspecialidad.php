<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/especialidad/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/especialidad/update" method="post">
            <div class="form-group">
                <label for="txtId">ID de la Especialidad:</label>
                <input type="text" readonly value="<?php echo $especialidad->id ?>" name="txtId" id="txtId" class="form-control">
            </div>
            <div class="form-group">
                <label for="txtCodigo">Nombre Especialidad:</label>
                <input type="text" value="<?php echo $especialidad->codigo ?>" name="txtCodigo" id="txtCodigo" class="form-control">
            </div>
            <div class="form-group">
                <label for="txtNombre">Descripcion Especialidad:</label>
                <input type="text" value="<?php echo $especialidad->nombre ?>" name="txtNombre" id="txtNombre" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit">Editar</button>
            </div>
        </form>
    </div>
</div>
