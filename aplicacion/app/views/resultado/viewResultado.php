<div class="data-container">
    <div class="navegate-group">
        <div class="create-group">
            <a href="/resultado/new"><button>+</button></a>
        </div>
    </div>
    <div class="info">
        <?php
        if (empty($resultados)) {
            echo '<br>No se encuentran resultados en la base de datos';
        } else {
            foreach ($resultados as $key => $value) {
                echo
                "<div class='record'>
                    <span> ID: $value->idResultado - $value->fkIdCompetencia</span>
                    <div class='buttons'>
                        <a href='/resultado/view/$value->idResultado'> <button>Consultar</button> </a>
                        <a href='/resultado/edit/$value->idResultado'> <button>Editar</button> </a> 
                        <a href='/resultado/delete/$value->idResultado'> <button>Eliminar</button> </a> 
                    </div>
                </div>";
            }
        }
        ?>
    </div>
</div>