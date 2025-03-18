<div class="data-container">
    <div class="form-group-button-volver">
        <a href="/momentosAprendizaje/view"><button>←</button></a>
    </div>
    <form action="/momentosAprendizaje/update" method="post">
        <div class="form-group">
            <label for="">ID del Momento de Aprendizaje:</label>
            <input type="text" readonly value="<?php echo $momento->idMomentosAprendizaje ?>" name="id" id="id" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Nombre del Momento de Aprendizaje:</label>
            <input type="text" value="<?php echo $momento->nombre ?>" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="form-group-button">
            <button type="submit">Editar</button>
        </div>
    </form>
</div>