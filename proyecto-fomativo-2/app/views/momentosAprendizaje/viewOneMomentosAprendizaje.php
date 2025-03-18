<div class="data-container">
    <div class="form-group-button-volver">
        <a href="/momentosAprendizaje/view"><button>←</button></a>
    </div>
    <?php
    if ($momento && is_object($momento)) {
        echo "
            <div class='record-one'>
                <span>ID: $momento->idMomentosAprendizaje</span>
                <span>Nombre: $momento->nombre</span>
            </div>
        ";
    }
    ?>
</div>