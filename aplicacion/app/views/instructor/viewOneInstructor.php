<div class="data-container">
    <div class="form-group-button-volver">
        <a href="/instructor/view"><button>←</button></a>
    </div>
    <?php
    if ($instructor && is_object($instructor)) {
        echo "
            <div class='record-one'>
                <span>ID: $instructor->idInstructor <br>
                Nombre: $instructor->nombre <br>
                Email: $instructor->email <br>
                Teléfono: $instructor->telefono <br> 
                Especialidad: $instructor->fkIdEspecialidad</span>
            </div>
    ";
    }
    ?>
</div>