<div class="data-container">
    <div class="navegate-group">
        <div class="create-group">
            <a href="/especialidad/new"><button>+</button></a>
        </div>
    </div>
    <div class="info">
        <?php
        if (empty($especialidades)) {
            echo '<br>No se encuentran especialidades en la base de datos';
        } else {
            foreach ($especialidades as $key => $value) {
                echo
                "<div class='record'>
                    <span> ID: $value->idEspecialidad - $value->nombre</span>
                    <div class='buttons'>
                        <a href='/especialidad/view/$value->idEspecialidad'> <button>Consultar</button> </a>
                        <a href='/especialidad/edit/$value->idEspecialidad'> <button>Editar</button> </a> 
                        <a href='/especialidad/delete/$value->idEspecialidad'> <button>Eliminar</button> </a> 
                    </div>
                </div>";
            }
        }
        ?>
    </div>
</div>