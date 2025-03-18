<div class="data-container">
    <div class="form-group-button-volver">
        <a href="/guia/view"><button>←</button></a>
    </div>
    <form action="/guia/create" method="post">
        <div class="form-group">
            <label for="">Nombre de la Guía:</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Presentación:</label>
            <input type="text" name="presentacion" id="presentacion" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Glosario de Términos:</label>
            <input type="text" name="glosarioTerminos" id="glosarioTerminos" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Referentes Bibliográficos:</label>
            <input type="text" name="referentesBibliograficos" id="referentesBibliograficos" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Razón de Cambio:</label>
            <input type="text" name="razonCambio" id="razonCambio" class="form-control">
        </div>
        <div class="form-group-button">
            <button type="submit">Guardar</button>
        </div>
    </form>
</div>