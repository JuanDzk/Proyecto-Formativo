<div class="data-container">
    <div class="form-group-button-volver">
        <a href="/tecnicasDidacticas/view"><button>←</button></a>
    </div>
    <form action="/tecnicasDidacticas/create" method="post">
        <div class="form-group">
            <label for="">Nombre de la Técnica Didáctica:</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Descripción:</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control">
        </div>
        <div class="form-group-button">
            <button type="submit">Guardar</button>
        </div>
    </form>
</div>