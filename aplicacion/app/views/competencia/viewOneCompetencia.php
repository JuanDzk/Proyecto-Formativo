<div class="data-container">
    <div class="form-group-button-volver">
        <a href="/competencia/view"><button>←</button></a>
    </div>
    <?php
    if ($competencia && is_object($competencia)) {
        echo "
            <div class='record-one'>
                <span>ID: $competencia->idCompetencia</span>
                <span>Nombre: $competencia->nombre</span>
            </div>
        ";
    }
    ?>
</div>