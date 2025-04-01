<div class="data-container">
    <div class="form-group-button-volver">
        <a href="/resultado/view"><button>←</button></a>
    </div>
    <?php
    if ($resultado && is_object($resultado)) {
        echo "
            <div class='record-one'>
                <span>ID: $resultado->idResultado <br>
                ID Competencia: $resultado->fkIdCompetencia</span>
            </div>
        ";
    }
    ?>
</div>