<div class="data-container">
    <div class="form-group-button-volver">
        <a href="/resultado/view"><button>←</button></a>
    </div>
    <form action="/resultado/update" method="post">
        <div class="form-group">
            <label for="">ID del Resultado:</label>
            <input type="text" readonly value="<?php echo $resultado->idResultado ?>" name="id" id="id" class="form-control">
        </div>
        <div class="form-group">
            <label for="">ID de la Competencia:</label>
            <input type="text" value="<?php echo $resultado->fkIdCompetencia ?>" name="fkIdCompetencia" id="fkIdCompetencia" class="form-control">
        </div>
        <div class="form-group-button">
            <button type="submit">Editar</button>
        </div>
    </form>
</div>