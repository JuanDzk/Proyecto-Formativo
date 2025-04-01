<div class="data-container">
    <div class="form-group-button-volver">
        <a href="/guia/view"><button>←</button></a>
    </div>
    <?php
    if ($guia && is_object($guia)) {
        echo "
            <div class='record-one'>
                <span>ID: $guia->idGuia <br>
                Nombre: $guia->nombre <br>
                Presentación: $guia->presentacion <br>
                Glosario de Términos: $guia->glosarioTerminos <br>
                Referentes Bibliográficos: $guia->referentesBibliograficos <br>
                Razón de Cambio: $guia->razonCambio <br>
                Instructor: $guia->fkIdInstructor <br>
                Programa de Formacion: $guia->fkIdProgramaFormacion <br>
                Especialidad: $guia->fkIdEspecialidad</span>
            </div>
        ";
    }
    ?>
</div>