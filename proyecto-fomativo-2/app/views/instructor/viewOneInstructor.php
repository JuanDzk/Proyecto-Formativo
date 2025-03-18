<div class="data-container">
    <div class="form-group-button-volver">
        <a href="/instructor/view"><button>←</button></a>
    </div>
    <?php
    if ($instructor && is_object($instructor)) {
        echo "
            <div class='record-one'>
                <span>ID: $instructor->idInstructor</span>
                <span>Nombre: $instructor->nombre</span>
                <span>Email: $instructor->email</span>
                <span>Teléfono: $instructor->telefono</span>
                <span>Especialidad: $instructor->fkIdEspecialidad</span>
            </div>
        ";
    }
    ?>
</div>