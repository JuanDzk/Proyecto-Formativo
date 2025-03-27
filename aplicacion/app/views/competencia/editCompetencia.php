<div class="data-container">
    <div class="form-group-button-volver">
        <a href="/competencia/view"><button>←</button></a>
    </div>
    <form action="/competencia/update" method="post">
        <div class="form-group">
            <label for="">ID de la Competencia:</label>
            <input type="text" readonly value="<?php echo $competencia->idCompetencia ?>" name="id" id="id" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Nombre de la Competencia:</label>
            <input type="text" value="<?php echo $competencia->nombre ?>" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="form-group-button">
            <button type="submit">Editar</button>
        </div>
    </form>
</div>