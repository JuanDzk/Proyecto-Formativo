<div class="data-container">
    <div class="form-group-button-volver">
        <a href="/guia/view"><button>←</button></a>
    </div>
    <form action="/guia/update" method="post">
        <div class="form-group">
            <label for="">ID de la Guía:</label>
            <input type="text" readonly value="<?php echo $guia->idGuia ?>" name="id" id="id" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Nombre de la Guía:</label>
            <input type="text" value="<?php echo $guia->nombre ?>" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Presentación:</label>
            <input type="text" value="<?php echo $guia->presentacion ?>" name="presentacion" id="presentacion" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Glosario de Términos:</label>
            <input type="text" value="<?php echo $guia->glosarioTerminos ?>" name="glosarioTerminos" id="glosarioTerminos" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Referentes Bibliográficos:</label>
            <input type="text" value="<?php echo $guia->referentesBibliograficos ?>" name="referentesBibliograficos" id="referentesBibliograficos" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Razón de Cambio:</label>
            <input type="text" value="<?php echo $guia->razonCambio ?>" name="razonCambio" id="razonCambio" class="form-control">
        </div>
        <div class="form-group-button">
            <button type="submit">Editar</button>
        </div>
    </form>
</div>