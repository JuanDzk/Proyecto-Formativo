<div class="data-container">
    <div class="navegate-group">
        <div class="create-group">
            <a href="/tecnicasDidacticas/new"><button>+</button></a>
        </div>
    </div>
    <div class="info">
        <?php
        if (empty($tecnicas)) {
            echo '<br>No se encuentran técnicas didácticas en la base de datos';
        } else {
            foreach ($tecnicas as $key => $value) {
                echo
                "<div class='record'>
                    <span> ID: $value->idTecnicasDidacticas - $value->nombre</span>
                    <div class='buttons'>
                        <a href='/tecnicasDidacticas/view/$value->idTecnicasDidacticas'> <button>Consultar</button> </a>
                        <a href='/tecnicasDidacticas/edit/$value->idTecnicasDidacticas'> <button>Editar</button> </a> 
                        <a href='/tecnicasDidacticas/delete/$value->idTecnicasDidacticas'> <button>Eliminar</button> </a> 
                    </div>
                </div>";
            }
        }
        ?>
    </div>
</div>