<div class="data-container">
    <div class="form-group-button-volver">
        <a href="/resultado/view"><button>←</button></a>
    </div>
    <div class="info">
        <form action="/resultado/remove" method="post">
            <div class="form-group">
                <label for="">ID del Resultado:</label>
                <input type="text" readonly value="<?php echo $resultado->idResultado ?>" name="id" id="id" class="form-control">
            </div>
            <div class="form-group-button">
                <button type="submit">Eliminar</button>
            </div>
        </form>
    </div>
</div>