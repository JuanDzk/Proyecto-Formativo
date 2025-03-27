<div class="data-container">
    <div class="form-group-button-volver">
        <a href="/momentosAprendizaje/view"><button>←</button></a>
    </div>
    <div class="info">
        <form action="/momentosAprendizaje/remove" method="post">
            <div class="form-group">
                <label for="">ID del Momento de Aprendizaje:</label>
                <input type="text" readonly value="<?php echo $momento->idMomentosAprendizaje ?>" name="id" id="id" class="form-control">
            </div>
            <div class="form-group-button">
                <button type="submit">Eliminar</button>
            </div>
        </form>
    </div>
</div>