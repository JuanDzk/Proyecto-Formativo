<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/login/init"><img src="/img/back.svg"></a>
        </div>
        <div class="create">
            <a href="/especialidad/new"><button>+</button></a>
        </div>
    </div>
    <div class="info">
        <?php
        if (empty($programaFormacion)) {
            echo '<br>No se encuentran programas de formación en la base de datos';
        } else {
            foreach ($programaFormacion as $key => $value) {
                echo
                "<div class='record'>
                    <span> ID: $value->id - $value->nombre</span>
                    <div class='buttons'>
                        <a href='/especialidad/view/$value->id'> <button>Consultar</button> </a> 
                        <a href='/especialidad/edit/$value->id'> <button>Editar</button> </a> 
                        <a href='/especialidad/delete/$value->id'> <button>Eliminar</button> </a> 
                    </div>
                </div>";
            }
        }
        ?>
    </div>
</div>