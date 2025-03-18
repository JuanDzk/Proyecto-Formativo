<div class="data-container">
    <div class="form-group-button-volver">
        <a href="/tecnicasDidacticas/view"><button>←</button></a>
    </div>
    <div class="info">
        <form action="/tecnicasDidacticas/remove" method="post">
            <div class="form-group">
                <label for="">ID de la Técnica Didáctica:</label>
                <input type="text" readonly value="<?php echo $tecnica->idTecnicasDidacticas ?>" name="id" id="id" class="form-control">
            </div>
            <div class="form-group-button">
                <button type="submit">Eliminar</button>
            </div>
        </form>
    </div>
</div>