<div class="data-container">
    <div class="navegate-group">
        <div class="create-group">
            <a href="/competencia/new"><button>+</button></a>
        </div>
    </div>
    <div class="info">
        <?php
        if (empty($competencias)) {
            echo '<br>No se encuentran competencias en la base de datos';
        } else {
            foreach ($competencias as $key => $value) {
                echo
                "<div class='record'>
                    <span> ID: $value->idCompetencia - $value->nombre</span>
                    <div class='buttons'>
                        <a href='/competencia/view/$value->idCompetencia'> <button>Consultar</button> </a>
                        <a href='/competencia/edit/$value->idCompetencia'> <button>Editar</button> </a> 
                        <a href='/competencia/delete/$value->idCompetencia'> <button>Eliminar</button> </a> 
                    </div>
                </div>";
            }
        }
        ?>
    </div>
</div>