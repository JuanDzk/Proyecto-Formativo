<div class="data-container">
    <div class="form-group-button-volver">
        <a href="/tecnicasDidacticas/view"><button>←</button></a>
    </div>
    <form action="/tecnicasDidacticas/update" method="post">
        <div class="form-group">
            <label for="">ID de la Técnica Didáctica:</label>
            <input type="text" readonly value="<?php echo $tecnica->idTecnicasDidacticas ?>" name="id" id="id" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Nombre de la Técnica Didáctica:</label>
            <input type="text" value="<?php echo $tecnica->nombre ?>" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Descripción:</label>
            <input type="text" value="<?php echo $tecnica->descripcion ?>" name="descripcion" id="descripcion" class="form-control">
        </div>
        <div class="form-group-button">
            <button type="submit">Editar</button>
        </div>
    </form>
</div>