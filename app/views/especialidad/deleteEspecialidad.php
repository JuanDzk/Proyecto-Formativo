<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/especialidad/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/especialidad/remove" method="post">
            <div class="form-group">
                <label>Especialidad:</label>
                <input type="text" readonly value="<?php echo $especialidad->nombre ?>" name="txtId" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit">Eliminar</button>
            </div>
        </form>
    </div>
</div>
