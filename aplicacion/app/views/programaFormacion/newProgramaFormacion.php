<div class="data-container">
    <div class="form-group-button-volver">
        <a href="/programaFormacion/view"><button>←</button></a>
    </div>
    <form action="/programaFormacion/create" method="post">
        <div class="form-group">
            <label for="">Código del Programa de Formación:</label>
            <input type="text" name="codProgramaFormacion" id="codProgramaFormacion" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Nombre del Programa de Formación:</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="form-group-button">
            <button type="submit">Guardar</button>
        </div>
    </form>
</div>