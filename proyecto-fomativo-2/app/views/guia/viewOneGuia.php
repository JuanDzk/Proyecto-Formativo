<div class="data-container">
    <div class="form-group-button-volver">
        <a href="/guia/view"><button>←</button></a>
    </div>
    <?php
    if ($guia && is_object($guia)) {
        echo "
            <div class='record-one'>
                <span>ID: $guia->idGuia</span>
                <span>Nombre: $guia->nombre</span>
                <span>Presentación: $guia->presentacion</span>
                <span>Glosario de Términos: $guia->glosarioTerminos</span>
                <span>Referentes Bibliográficos: $guia->referentesBibliograficos</span>
                <span>Razón de Cambio: $guia->razonCambio</span>
            </div>
        ";
    }
    ?>
</div>