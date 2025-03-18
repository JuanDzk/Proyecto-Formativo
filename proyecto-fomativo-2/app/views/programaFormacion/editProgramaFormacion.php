<div class="data-container">
    <div class="form-group-button-volver">
        <a href="/programaFormacion/view"><button>←</button></a>
    </div>
    <form action="/programaFormacion/update" method="post">
        <div class="form-group">
            <label for="">ID del Programa de Formación:</label>
            <input type="text" readonly value="<?php echo $programa->idProgramaFormacion ?>" name="id" id="id" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Código del Programa de Formación:</label>
            <input type="text" value="<?php echo $programa->codProgramaFormacion ?>" name="codProgramaFormacion" id="codProgramaFormacion" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Nombre del Programa de Formación:</label>
            <input type="text" value="<?php echo $programa->nombre ?>" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="form-group-button">
            <button type="submit">Editar</button>
        </div>
    </form>
</div>