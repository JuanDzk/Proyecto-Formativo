<div class="data-container">
    <div class="navegate-group">
        <div class="create-group">
            <a href="/momentosAprendizaje/new"><button>+</button></a>
        </div>
    </div>
    <div class="info">
        <?php
        if (empty($momentos)) {
            echo '<br>No se encuentran momentos de aprendizaje en la base de datos';
        } else {
            foreach ($momentos as $key => $value) {
                echo
                "<div class='record'>
                    <span> ID: $value->idMomentosAprendizaje - $value->nombre</span>
                    <div class='buttons'>
                        <a href='/momentosAprendizaje/view/$value->idMomentosAprendizaje'> <button>Consultar</button> </a>
                        <a href='/momentosAprendizaje/edit/$value->idMomentosAprendizaje'> <button>Editar</button> </a> 
                        <a href='/momentosAprendizaje/delete/$value->idMomentosAprendizaje'> <button>Eliminar</button> </a> 
                    </div>
                </div>";
            }
        }
        ?>
    </div>
</div>