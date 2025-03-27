<div class="data-container">
    <div class="form-group-button-volver">
        <a href="/especialidad/view"><button>←</button></a>
    </div>
    <div class="info">
        <form action="/especialidad/remove" method="post">
            <div class="form-group">
                <label for="">ID de la Especialidad:</label>
                <input type="text" readonly value="<?php echo $especialidad->idEspecialidad ?>" name="id" id="id" class="form-control">
            </div>
            <div class="form-group-button">
                <button type="submit">Eliminar</button>
            </div>
        </form>
    </div>
</div>