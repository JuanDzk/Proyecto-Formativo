<div class="data-container">
    <div class="form-group-button-volver">
        <a href="/programaFormacion/view"><button>←</button></a>
    </div>
    <?php
    if ($programa && is_object($programa)) {
        echo "
            <div class='record-one'>
                <span>ID: $programa->idProgramaFormacion</span>
                <span>Código: $programa->codProgramaFormacion</span>
                <span>Nombre: $programa->nombre</span>
            </div>
        ";
    }
    ?>
</div>