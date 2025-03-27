<div class="data-container">
    <div class="navegate-group">
        <div class="create-group">
            <a href="/guia/new"><button>+</button></a>
        </div>
    </div>
    <div class="info">
        <?php
        if (empty($guias)) {
            echo '<br>No se encuentran guías en la base de datos';
        } else {
            foreach ($guias as $key => $value) {
                echo
                "<div class='record'>
                    <span> ID: $value->idGuia - $value->nombre</span>
                    <div class='buttons'>
                        <a href='/guia/view/$value->idGuia'> <button>Consultar</button> </a>
                        <a href='/guia/edit/$value->idGuia'> <button>Editar</button> </a> 
                        <a href='/guia/delete/$value->idGuia'> <button>Eliminar</button> </a> 
                    </div>
                </div>";
            }
        }
        ?>
    </div>
</div>