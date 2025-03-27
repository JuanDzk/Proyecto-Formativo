<div class="data-container">
    <div class="form-group-button-volver">
        <a href="/momentosAprendizaje/view"><button>←</button></a>
    </div>
    <?php
    if ($momentos && is_object($momentos)) {
        echo "
            <div class='record-one'>
                <span>ID: $momentos->idMomentosAprendizaje</span>
                <span>Nombre: $momentos->nombre</span>
            </div>
        ";
    }
    ?>
</div>