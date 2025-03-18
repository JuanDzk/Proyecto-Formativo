<div class="data-container">
    <div class="form-group-button-volver">
        <a href="/programaFormacion/view"><button>←</button></a>
    </div>
    <div class="info">
        <form action="/programaFormacion/remove" method="post">
            <div class="form-group">
                <label for="">ID del Programa de Formación:</label>
                <input type="text" readonly value="<?php echo $programa->idProgramaFormacion ?>" name="id" id="id" class="form-control">
            </div>
            <div class="form-group-button">
                <button type="submit">Eliminar</button>
            </div>
        </form>
    </div>
</div>