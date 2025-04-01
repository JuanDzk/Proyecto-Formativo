<div class="data-container">
    <div class="form-group-button-volver">
        <a href="/especialidad/view"><button>←</button></a>
    </div>
    <?php
    if ($especialidad && is_object($especialidad)) {
        echo "
            <div class='record-one'>
                <span>ID: $especialidad->idEspecialidad <br> Nombre: $especialidad->nombre <br> Descripción: $especialidad->descripcion</span>
            </div>
        ";
    }
    ?>
</div>