<div class="data-container">
    <div class="form-group-button-volver">
        <a href="/tecnicasDidacticas/view"><button>←</button></a>
    </div>
    <?php
    if ($tecnica && is_object($tecnica)) {
        echo "
            <div class='record-one'>
                <span>ID: $tecnica->idTecnicasDidacticas</span>
                <span>Nombre: $tecnica->nombre</span>
                <span>Descripción: $tecnica->descripcion</span>
            </div>
        ";
    }
    ?>
</div>