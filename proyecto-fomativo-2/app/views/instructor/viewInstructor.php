<div class="data-container">
    <div class="navegate-group">
        <div class="create-group">
            <a href="/instructor/new"><button>+</button></a>
        </div>
    </div>
    <div class="info">
        <?php
        if (empty($instructores)) {
            echo '<br>No se encuentran instructores en la base de datos';
        } else {
            foreach ($instructores as $key => $value) {
                echo
                "<div class='record'>
                    <span> ID: $value->idInstructor - $value->nombre</span>
                    <div class='buttons'>
                        <a href='/instructor/view/$value->idInstructor'> <button>Consultar</button> </a>
                        <a href='/instructor/edit/$value->idInstructor'> <button>Editar</button> </a> 
                        <a href='/instructor/delete/$value->idInstructor'> <button>Eliminar</button> </a> 
                    </div>
                </div>";
            }
        }
        ?>
    </div>
</div>